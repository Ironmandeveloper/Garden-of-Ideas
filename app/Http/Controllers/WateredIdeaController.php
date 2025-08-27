<?php

namespace App\Http\Controllers;

use App\Models\WateredIdea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WateredIdeaController extends Controller
{
    public function store($ideaId){
        $user = Auth::user();

        if(!$user){
            return response()->json(['message'=>'Unauthorized'], 401);
        }

        $exists = WateredIdea::where('user_id', $user->id)->where('idea_id', $ideaId)->exists();

        if ($exists) {
            return response()->json(['message' => 'Already watered this idea!'], 409);
        }

        WateredIdea::create([
            'user_id' => $user->id,
            'idea_id' => $ideaId
        ]);

        return response()->json(['message' => 'Idea watered successfully']);
    }
}
