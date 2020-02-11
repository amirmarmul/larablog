@extends('front.layouts.app')

@section('content')
@foreach ($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a class="text-muted" href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
        <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>

        <p>{{ $post->content }}</p>
    </div>
@endforeach

{{ $posts->links() }}
@endsection
