@extends('back.layouts.app')

@section('content')
<h3>{{ $post->title }}</h3>

<div class="card mb-4">
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

<h3>{{ __('Tags') }}</h3>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped datatable" data-ajax="/back/posts/{{ $post->id }}/tags">
            <thead>
                <th data-data="id">{{ __('ID') }}</th>
                <th data-data="name">{{ __('Name') }}</th>
                <th data-data="slug">{{ __('Slug') }}</th>
                <th data-data="created_at">{{ __('Created At') }}</th>
                <th data-data="updated_at">{{ __('Updated At') }}</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection
