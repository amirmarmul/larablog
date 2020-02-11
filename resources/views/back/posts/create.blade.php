@extends('back.layouts.app')

@section('content')
<h3>{{ __('Create Post') }}</h3>

<div class="card">
    <form method="post" action="/back/posts">
        @method('post')
        @csrf

        <div class="card-header">
            <div class="card-tools text-right">
                <button type="submit" class="btn btn-outline-primary">{{ __('Submit') }}</button>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Title') }}</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="{{ __('Title') }}" name="title" value="{{ old('title') }}">
                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Slug') }}</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="{{ __('Slug') }}" name="slug" value="{{ old('slug') }}">
                @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Status') }}</label>
                <select class="form-control select2 @error('status') is-invalid @enderror" data-placeholder="{{ __('Status') }}" name="status">
                    <option></option>
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
                @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Tags') }}</label>
                <select class="form-control select2 @error('tags') is-invalid @enderror" data-placeholder="{{ __('Tags') }}" name="tags[]" multiple>
                    <option></option>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
                @error('tags') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Content') }}</label>
                <textarea name="content" rows="10" class="form-control @error('content') is-invalid @enderror" placeholder="{{ __('Content') }}">{{ old('slug') }}</textarea>
                @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </form>
</div>
@endsection
