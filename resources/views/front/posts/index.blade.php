@extends('front.layouts.app')

@section('title', __('Posts'))

@section('content')
@foreach ($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a class="text-muted" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p class="blog-post-meta">{{ $post->human_timestamp }} {{ __('by') }} {{ $post->user->name }}</p>

        <p>{{ $post->excerpt }}</p>
    </div>
@endforeach

{{ $posts->links() }}
@endsection
