@extends('layouts.main_app')

@section('content')
<div class="idea-container">
    <h2 class="section-title">🌱 Original Idea</h2>
    <p><strong>Title:</strong> {{ $idea->idea_name }}</p>
    <p><strong>Summary:</strong> {{ $idea->idea_sentence }}</p>
    <p><strong>Full Story:</strong> {!! nl2br(e($idea->full_story)) !!}</p>
    <p><strong>Challenge:</strong> {{ $idea->challenge }}</p>
    <p><strong>Impact:</strong> {{ $idea->impact }}</p>
    <p><strong>Spark:</strong> {{ $idea->spark }}</p>
    <p><strong>Unique:</strong> {{ $idea->unique }}</p>
    <p><strong>Resources:</strong> {{ $idea->resources }}</p>
    <p><strong>Challenges:</strong> {{ $idea->challenges }}</p>
    <p><strong>Collaboration:</strong> {{ $idea->collaboration }}</p>
    <p><strong>First Step:</strong> {{ $idea->first_step }}</p>

    @if($idea->cover_image)
        <p><strong>Uploaded Image:</strong></p>
        <img src="{{ asset('storage/' . $idea->cover_image) }}" class="idea-img" alt="Original">
    @endif

    <hr>

    <h2 class="section-title">🤖 AI Enhanced</h2>
    <p><strong>AI Title:</strong> {{ $idea->ai_idea_name }}</p>
    <p><strong>AI Problem:</strong> {{ $idea->ai_idea_sentence }}</p>
    <p><strong>AI Full Story:</strong> {!! nl2br(e($idea->ai_full_story)) !!}</p>
    <p><strong>AI Challenge:</strong> {{ $idea->ai_challenge }}</p>
    <p><strong>AI Impact:</strong> {{ $idea->ai_impact }}</p>
    <p><strong>AI Spark:</strong> {{ $idea->ai_spark }}</p>
    <p><strong>AI Unique:</strong> {{ $idea->ai_unique }}</p>
    <p><strong>AI Resources:</strong> {{ $idea->ai_resources }}</p>
    <p><strong>AI Challenges:</strong> {{ $idea->ai_challenges }}</p>
    <p><strong>AI Collaboration:</strong> {{ $idea->ai_collaboration }}</p>
    <p><strong>AI First Step:</strong> {{ $idea->ai_first_step }}</p>

    @if($idea->ai_cover_image)
        <p><strong>AI-Generated Image:</strong></p>
        <img src="{{ asset('storage/' . $idea->ai_cover_image) }}" class="idea-img" alt="AI Image">
    @endif
</div>
@endsection

@push('styles')
<style>
    .idea-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background-color: #111;
        color: white;
        border-radius: 10px;
    }

    .section-title {
        font-size: 1.5rem;
        color: #ffc107;
        margin-bottom: 10px;
    }

    p {
        margin: 8px 0;
    }

    .idea-img {
        max-width: 100%;
        width: 300px;
        border-radius: 8px;
        margin-top: 10px;
        border: 1px solid #333;
    }

    hr {
        border-top: 1px solid #444;
        margin: 30px 0;
    }
</style>
@endpush
