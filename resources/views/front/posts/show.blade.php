@extends('front.layouts.app')

@section('title', $post->title)

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>

    <p>{{ $post->content }}</p>
</div>
@endsection
