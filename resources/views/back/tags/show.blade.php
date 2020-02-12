@extends('back.layouts.app')

@section('content')
<h3>{{ $tag->name }}</h3>

<div class="card mb-10">
    <div class="card-body">
        <div class="form-group">
            <label>{{ __('Name') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ $tag->name }}" readonly>
        </div>

        <div class="form-group">
            <label>{{ __('Slug') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Slug') }}" name="slug" value="{{ $tag->slug }}" readonly>
        </div>
    </div>
</div>
<br>

<h3>Posts</h3>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped datatable" data-ajax="/back/tags/{{ $tag->id }}/posts">
            <thead>
                <th data-data="id">{{ __('ID') }}</th>
                <th data-data="title">{{ __('Title') }}</th>
                <th data-data="slug">{{ __('Slug') }}</th>
                <th data-data="created_at">{{ __('Created At') }}</th>
                <th data-data="updated_at">{{ __('Updated At') }}</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection
