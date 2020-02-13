@extends('back.layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">{{ __('Users') }}</div>
            <div class="card-body">
                <h4 class="display-4">{{ App\User::count() }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">{{ __('Posts') }}</div>
            <div class="card-body">
                <h4 class="display-4">{{ App\Post::count() }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">{{ __('Tags') }}</div>
            <div class="card-body">
                <h4 class="display-4">{{ App\Tag::count() }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">{{ __('Blank') }}</div>
            <div class="card-body">
                <h4 class="display-4">-</h4>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">{{ __('Welcome') }}, {{ Auth::user()->name }}</div>

    <div class="card-body">
        {{ __('You are logged in!') }}
    </div>
</div>
@endsection
