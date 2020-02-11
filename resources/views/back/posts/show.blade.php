@extends('back.layouts.app')

@section('content')
<h3>{{ $post->title }}</h3>

<div class="card">
    <div class="card-body">
        <div class="form-group">
            <label>{{ __('Title') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Title') }}" name="name" value="{{ $post->title }}" readonly>
        </div>

        <div class="form-group">
            <label>{{ __('Slug') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Slug') }}" name="slug" value="{{ $post->slug }}" readonly>
        </div>

        <div class="form-group">
            <label>{{ __('Status') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Status') }}" name="status" value="{{ $post->status }}" readonly>
        </div>

        <div class="form-group">
            <label>{{ __('User') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('User') }}" name="user" value="{{ $post->user->name }}" readonly>
        </div>

        <div class="form-group">
            <label>{{ __('Content') }}</label>
            <textarea name="content" rows="10" class="form-control" placeholder="{{ __('Content') }}" readonly>{{ $post->content }}</textarea>
        </div>
    </div>
</div>
@endsection
