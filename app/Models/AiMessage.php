<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'idea_id',
        'message',
        'sent'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function idea(){
        return $this->belongsTo(Idea::class);
    }
}
