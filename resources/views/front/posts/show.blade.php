@extends('front.layouts.app')

@section('title', $post->title)

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 font-italic">{{ $post->title }}</h1>
        <p class="lead my-3">by {{ $post->user->name }}</p>
    </div>
</div>

<div class="blog-post">
    {!! $post->content !!}
</div>
@endsection
