<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;


class ExploreGardenController extends Controller
{
    /**
     * Displays the explore Garden Page.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $ideas = Idea::orderBy('created_at', 'desc')->get();
        $wateredIdeaIds = Auth::check()
            ? Auth::user()->wateredIdeas->pluck('idea_id')->toArray()
            : [];
        return view('explore_garden.index', compact('ideas', 'wateredIdeaIds'));
    }

    public function getAiAnalysis($id)
    {
        $idea = Idea::find($id);
        // if not exists
        if (!$idea) {
            return response()->json([
                'success' => false,
                'message' => 'Idea not Found.',
            ]);
        }
        // if already exists
        if (!empty($idea->ai_analysis)) {
            return response()->json([
                'success' => true,
                'analysis' => $idea->ai_analysis
            ]);
        }

        // otherwise generate AI analysis
        try {
            $apiKey = env('AZURE_OPENAI_KEY');
            $azureEndpoint = env('AZURE_OPENAI_CHAT_URL');
            $messages = [
                [
                    'role' => 'system',
                    'content' => 'You are a professional product strategist and creative technologist. Provide clear, concise, and structured enhancements to user ideas.'
                ],
                [
                    'role' => 'user',
                    'content' => <<<EOD
                    You are an expert product strategist. Given the following:

                    Idea Title: {$idea->idea_name}
                    Description: {$idea->idea_sentence}

                    Please Analyze and produce exactly four sections, each with 3-4 bullet points:

                    Strengths:
                    Suggestions for Improvement:
                    Creative Expansions:
                    Connections to Other Ideas:

                    Use “•” as bullet style. No other formatting.
                    EOD
                ]
            ];

            $response = Http::withHeaders([
                'api-key' => $apiKey,
                'Content-Type' => 'application/json'
            ])->withoutVerifying()->post($azureEndpoint, [
                        'messages' => $messages,
                        'temperature' => 0.7,
                        'max_tokens' => 500,
                    ]);

            if (!$response->ok()) {
                \Log::error('AI Analsis failed', ['response' => $response->body()]);
                return response()->json(['success' => false, 'message' => 'AI Analysis failed']);
            }

            $analysis = trim($response->json('choices.0.message.content'));

            $idea->update(['ai_analysis' => $analysis]);

            return response()->json([
                'success' => true,
                'analysis' => $analysis
            ]);
        } catch (\Exception $e) {
            \Log::error('Exception during AI analysis', ['message' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'AI error:' . $e->getMessage()
            ]);
        }
    }
}
