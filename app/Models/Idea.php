<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    // User fields
    'idea_name',
    'idea_sentence',
    'full_story',
    'challenge',
    'impact',
    'spark',
    'unique',
    'resources',
    'challenges',
    'collaboration',
    'first_step',
    'cover_image',

    // AI fields
    'ai_idea_name',
    'ai_idea_sentence',
    'ai_full_story',
    'ai_challenge',
    'ai_impact',
    'ai_spark',
    'ai_unique',
    'ai_resources',
    'ai_challenges',
    'ai_collaboration',
    'ai_first_step',
    'ai_cover_image',

    // Flag
    'is_ai_refined',
    'ai_analysis',
];

public function user(){
    return $this->belongsTo(User::class);
}

public function wateredByUsers()
{
    return $this->hasMany(WateredIdea::class);
}

}
