<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class IdeaController extends Controller
{
    /**
     * Display the Form Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('sow.index');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'idea_name' => 'required|string|max:255',
            'idea_sentence' => 'required|string|max:255',
            'full_story' => 'required|string',
            'cover_image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->hasFile('cover_image')
            ? $request->file('cover_image')->store('cover_images', 'public')
            : null;

        $idea = Idea::create([
            'user_id' => auth()->id(),
            'idea_name' => $validated['idea_name'],
            'idea_sentence' => $validated['idea_sentence'],
            'full_story' => $validated['full_story'],
            'challenge' => $request->challenge,
            'impact' => $request->impact,
            'spark' => $request->spark,
            'unique' => $request->unique,
            'resources' => $request->resource,
            'challenges' => $request->challenges,
            'collaboration' => $request->collaboration,
            'first_step' => $request->first_step,
            'cover_image' => $imagePath,
        ]);

        // Skip AI if user clicked "Submit As Is"
        if ($request->has('skip_ai')) {
            if (!$imagePath) {
                $generatedImageUrl = $this->generateImageWithOpenAI($idea);
                if ($generatedImageUrl) {
                    try {
                        $imageContents = null;
                        $retries = 3;
                        while ($retries-- > 0) {
                            try {
                                $imageContents = file_get_contents($generatedImageUrl);
                                if ($imageContents !== false) {
                                    break;
                                }
                            } catch (\Exception $e) {
                                usleep(500 * 1000); // wait 500ms before retrying
                            }
                        }

                        if ($imageContents !== false && $imageContents !== null) {
                            $filename = 'ai_images/' . uniqid('ai_', true) . '.png';
                            \Storage::disk('public')->put($filename, $imageContents);
                            $idea->update(['ai_cover_image' => $filename]);
                        } else {
                            \Log::error('Failed to download AI image (Submit As Is)');
                        }
                    } catch (\Exception $e) {
                        \Log::error('Error saving AI image (Submit As Is)', ['msg' => $e->getMessage()]);
                    }
                }

            }
            return redirect()->route('explore.gardens');
        }
        // ✅ Use AI-enhanced data from request if present (from frontend)
        if ($request->filled('ai_idea_name') && $request->filled('ai_idea_sentence') && $request->filled('ai_full_story')) {
            $aiUpdateData = [
                'ai_idea_name' => $request->input('ai_idea_name'),
                'ai_idea_sentence' => $request->input('ai_idea_sentence'),
                'ai_full_story' => $request->input('ai_full_story'),
                // 'ai_cover_image' => $request->input('ai_cover_image'),
                'is_ai_refined' => $request->boolean('is_ai_refined'),
            ];

            // Conditionally add optional AI fields if they exist in request
            $optionalFields = [
                'ai_challenge',
                'ai_impact',
                'ai_spark',
                'ai_unique',
                'ai_resources',
                'ai_challenges',
                'ai_collaboration',
                'ai_first_step'
            ];

            foreach ($optionalFields as $field) {
                if ($request->filled($field)) {
                    $aiUpdateData[$field] = $request->input($field);
                }
            }

            $idea->update($aiUpdateData);
            // ✅ NOW place image download/save code here:
            if ($request->filled('ai_cover_image')) {
                $imgUrl = $request->input('ai_cover_image');

                try {
                    $imageContents = null;
                    $retries = 3;
                    while ($retries-- > 0) {
                        try {
                            $imageContents = file_get_contents($imgUrl);
                            if ($imageContents !== false) {
                                break;
                            }
                        } catch (\Exception $e) {
                            usleep(500 * 1000); // wait 500ms
                        }
                    }

                    if ($imageContents !== false && $imageContents !== null) {
                        $filename = 'ai_images/' . uniqid('ai_', true) . '.png';
                        \Storage::disk('public')->put($filename, $imageContents);
                        $idea->update(['ai_cover_image' => $filename]);
                    } else {
                        \Log::error('Failed to download AI image after retries');
                    }
                } catch (\Exception $e) {
                    \Log::error('Error downloading AI image', ['msg' => $e->getMessage()]);
                }
            }

        }

        return redirect()->route('explore.gardens');
    }

    private function refineWithOpenAI(Idea $idea): array|null
    {
        try {
            $azureApiKey = env('AZURE_OPENAI_KEY');
            $chatUrl = env('AZURE_OPENAI_CHAT_URL');
            $imageUrl = env('AZURE_OPENAI_IMAGE_URL');
            if (!$azureApiKey || !$chatUrl) {
                \Log::error('Azure OpenAI credentials missing.');
                return null;
            }

            $lines = [
                "Idea: {$idea->idea_name}",
                "Problem: {$idea->idea_sentence}",
                "Implementation: {$idea->full_story}",
            ];

            $optionalFields = [
                'challenge' => 'Challenge',
                'impact' => 'Impact',
                'spark' => 'Spark',
                'unique' => 'Unique',
                'resources' => 'Resources',
                'challenges' => 'Challenges',
                'collaboration' => 'Collaboration',
                'first_step' => 'FirstStep',
            ];

            $presentFields = [];
            foreach ($optionalFields as $field => $label) {
                if (!empty($idea->$field)) {
                    $lines[] = "$label: {$idea->$field}";
                    $presentFields[] = "\"ai_{$field}\": \"...\"";
                }
            }
            $jsonFields = implode(",\n  ", array_merge([
                '"refined_idea": "..."',
                '"refined_problem": "..."',
                '"refined_implementation": "..."'
            ], $presentFields));


            $prompt = <<<EOD
You are a professional product strategist and creative technologist.

Your task is to refine and elevate a creative product idea submission. You will be given a project title, subtitle (elevator pitch), detailed description, and optionally some supplemental details.

Goals:
- Improve grammar, spelling, clarity, and flow
- Keep the original tone and intent
- Add helpful detail or vivid language where appropriate
- Unify title, subtitle, and description into a polished, engaging version

Here is the raw submission:
---
{$this->formatLines($lines)}
---

You must return only valid JSON in this format:
{
{$jsonFields}
}

Do not include any explanation, markdown, or extra text.
EOD;
            // ✅ Azure OpenAI Chat Completion Request
            $response = Http::withHeaders([
                'api-key' => $azureApiKey,
                'Content-Type' => 'application/json',
            ])->withoutVerifying()->post($chatUrl, [
                        'messages' => [
                            ['role' => 'system', 'content' => 'You are a professional product strategist.'],
                            ['role' => 'user', 'content' => $prompt],
                        ],
                        'temperature' => 0.7,
                        'max_tokens' => 600,
                    ]);

            if (!$response->ok()) {
                \Log::error('Azure Chat API failed', ['body' => $response->body()]);
                return null;
            }

            $rawContent = $response->json('choices.0.message.content');

            if (!preg_match('/\{.*\}/s', $rawContent, $match)) {
                \Log::error('Azure did not return JSON block', ['response' => $rawContent]);
                return null;
            }

            $jsonText = preg_replace('/([a-zA-Z0-9_]+)\s*:/', '"$1":', $match[0]);
            $refinedData = json_decode($jsonText, true);

            if (!is_array($refinedData)) {
                \Log::error('Failed to decode AI refined data', ['json' => $jsonText]);
                return null;
            }

            // 🖼️ Image Generation
            $imgPrompt = "Capture a high-resolution, photo-realistic image of the following real-life concept:\n
Idea: {$refinedData['refined_idea']}\n
Problem: {$refinedData['refined_problem']}\n
Implementation: {$refinedData['refined_implementation']}\n
Use natural lighting, real-world textures, and realistic human or environmental elements.
Shot as if taken with a DSLR camera. No illustrations, no cartoons, no digital drawings — only realistic photographic imagery.";


            $imgResponse = Http::withHeaders([
                'api-key' => $azureApiKey,
                'Content-Type' => 'application/json',
            ])->withoutVerifying()->post($imageUrl, [
                        'prompt' => $imgPrompt,
                        'n' => 1,
                        'size' => '1024x1024',
                    ]);
            if (!$imgResponse->ok()) {
                \Log::error('Image generation failed', ['body' => $imgResponse->body()]);
                return null;
            }

            $imgUrl = $imgResponse->json('data.0.url') ?? null;


            return [
                'refined_data' => $refinedData,
                'image_url' => $imgUrl,
            ];
        } catch (\Throwable $e) {
            \Log::error('Exception in refineWithOpenAI', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return null;
        }
    }


    public function refineAjax(Request $request)
    {
        $idea = new Idea([
            'idea_name' => $request->idea_name,
            'idea_sentence' => $request->idea_sentence,
            'full_story' => $request->full_story,
            'challenge' => $request->challenge,
            'impact' => $request->impact,
            'spark' => $request->spark,
            'unique' => $request->unique,
            'resources' => $request->resource,
            'challenges' => $request->challenges,
            'collaboration' => $request->collaboration,
            'first_step' => $request->first_step,
        ]);

        $ai = $this->refineWithOpenAI($idea);
        return response()->json([
            'success' => true,
            'data' => $ai,
        ]);
    }

    private function generateImageWithOpenAI(Idea $idea): ?string
    {
        try {
            $azureApiKey = env('AZURE_OPENAI_KEY');

            $imageUrl = env('AZURE_OPENAI_IMAGE_URL');

            if (!$azureApiKey || !$imageUrl) {
                \Log::error('Azure OpenAI API key or image endpoint missing.');
                return null;
            }

            $prompt = "Capture a high-resolution, photo-realistic image showing the following real-world concept:
A real-life scene representing the idea titled '{$idea->idea_name}'.
It should visually reflect the core problem: '{$idea->idea_sentence}'
and how it is implemented: '{$idea->full_story}'.
Use natural lighting and realistic textures. No illustrations, no cartoons, only real-life photography style visuals.";


            $imgResponse = Http::withHeaders([
                'api-key' => $azureApiKey,
                'Content-Type' => 'application/json',
            ])->withoutVerifying()->post($imageUrl, [
                        'prompt' => $prompt,
                        'n' => 1,
                        'size' => '1024x1024',
                    ]);
            if (!$imgResponse->ok()) {
                \Log::error('Azure Image generation failed (submit-as-is)', [
                    'body' => $imgResponse->body(),
                    'status' => $imgResponse->status(),
                ]);
                return null;
            }

            return $imgResponse->json('data.0.url') ?? null;
        } catch (\Throwable $e) {
            \Log::error('Exception in generateImageWithOpenAI', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return null;
        }
    }

    private function formatLines(array $lines): string
    {
        return implode("\n", $lines);
    }


}
