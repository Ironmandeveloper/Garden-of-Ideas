<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            // Required User Input
            $table->string('idea_name');
            $table->string('idea_sentence');
            $table->text('full_story');
            // Optional Fields Supplimental
            $table->text('challenge')->nullable();
            $table->text('impact')->nullable();
            $table->text('spark')->nullable();
            $table->text('unique')->nullable();
            $table->text('resources')->nullable();
            $table->text('challenges')->nullable();
            $table->text('collaboration')->nullable();
            $table->text('first_step')->nullable();
            $table->text('cover_image')->nullable();
            // AI Refined Fields (Mirrors the above)
            $table->string('ai_idea_name')->nullable();
            $table->string('ai_idea_sentence')->nullable();
            $table->text('ai_full_story')->nullable();
            $table->text('ai_challenge')->nullable();
            $table->text('ai_impact')->nullable();
            $table->text('ai_spark')->nullable();
            $table->text('ai_unique')->nullable();
            $table->text('ai_resources')->nullable();
            $table->text('ai_challenges')->nullable();
            $table->text('ai_collaboration')->nullable();
            $table->text('ai_first_step')->nullable();
            $table->text('ai_cover_image')->nullable();
            $table->boolean('is_ai_refined')->default(false); // flages
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ideas');
    }
}
