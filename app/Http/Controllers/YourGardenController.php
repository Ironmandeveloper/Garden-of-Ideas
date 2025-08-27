<?php

namespace App\Http\Controllers;

use App\Models\AiMessage;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YourGardenController extends Controller
{
    /**
     *  Displays the Data according to currently Login User.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $ideas = Idea::where('user_id', '=', $userId)->latest()->get();
        return view('your_garden.index', compact('ideas'));
    }

    public function sendToAi(Request $request)
    {
        // Validation
        $request->validate([
            'idea_id' => 'required|exists:ideas,id',
            'message' => 'required|string',
        ]);

        $userId = auth()->id();
        $ideaId = $request->idea_id;
        $userMessage = $request->message;

        // saves the User Message
        AiMessage::create([
            'user_id' => $userId,
            'idea_id' => $ideaId,
            'message' => $userMessage,
            'sent' => true, // as 1 value for user
        ]);

        // Get All Chat History

        $history = AiMessage::where('user_id', '=', $userId)
            ->where('idea_id', '=', $ideaId)
            ->orderBy('id')
            ->get();

        $messages = [
            [
                'role' => 'system',
                'content' => 'You are an AI assistant developed by OpenAI. Provide clear, helpful, and friendly answers.'
            ]
        ];

        foreach ($history as $msg) {
            $messages[] = [
                'role' => $msg->sent ? 'user' : 'assistant',
                'content' => $msg->message,
            ];
        }

        // call open ai
        $apiKey = env('AZURE_OPENAI_KEY');
        $azureEndpoint = env('AZURE_OPENAI_CHAT_URL');
    $response = Http::withHeaders([
        'api-key' => $apiKey,
        'Content-Type' => 'application/json'
    ])->withoutVerifying()->post($azureEndpoint, [
        'messages' => $messages,
        'temperature' => 0.7,
        'max_tokens' => 500,
    ]);
    if (!$response->ok()) {
        \Log::error('Azure Chat API failed', ['body' => $response->body()]);
        return response()->json(['error' => 'AI failed to respond.'], 500);
    }

        $reply = $response->json('choices.0.message.content');

        // Now save AI Assistant Messages
        AiMessage::create([
            'user_id' => $userId,
            'idea_id' => $ideaId,
            'message' => $reply,
            'sent' => false, // 0 for ai
        ]);

        return response()->json(['reply' => $reply]);
    }

    public function getIdeaChatHistory(Request $request)
    {
        $request->validate([
            'idea_id' => 'required|exists:ideas,id',
        ]);
        $userId = auth()->id();
        $ideaId = $request->idea_id;
        $messages = AiMessage::where('user_id', '=', $userId)
            ->where('idea_id', '=', $ideaId)
            ->orderBy('created_at', 'asc')
            ->get(['message', 'sent']);
        return response()->json($messages);
    }

    public function wateredIdeas(){
       $userId =  auth()->id();

       $ideas = auth()->user()->wateredIdeas()->latest()->get();
       return view('your_garden.watered',compact('ideas') );
    }
}
