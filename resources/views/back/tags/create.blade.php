@extends('back.layouts.app')

@section('content')
<h3>{{ __('Create Tag') }}</h3>

<div class="card">
    <form method="post" action="/back/tags">
        @method('post')
        @csrf

        <div class="card-header">
            <div class="card-tools text-right">
                <button type="submit" class="btn btn-outline-primary">{{ __('Submit') }}</button>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Name') }}</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Slug') }}</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="{{ __('Slug') }}" name="slug" value="{{ old('slug') }}">
                @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </form>
</div>
@endsection
