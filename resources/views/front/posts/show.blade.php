@extends('front.layouts.app')

@section('title', $post->title)

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 font-italic">{{ $post->title }}</h1>
        <p class="lead my-3">
            @foreach($post->tags as $tag)
                <a class="text-muted" href="/tags/{{ $tag->slug }}">#{{ $tag->slug }}</a>
            @endforeach
        </p>
    </div>
</div>

<div class="blog-post">
    {!! $post->content !!}
</div>

<div class="blog-author mt-4">
    <h4>{{ __('Author') }}</h4>
    <div class="blog-author-box">
        <div class="blog-author-img">
            <img src="{{ $post->user->gravatar }}" alt="avatar">
        </div>
        <div class="blog-author-content">
            <h6>{{ $post->user->name }}</h6>
            <p>{{ $post->user->email }}</p>
        </div>
    </div>
</div>
@endsection
