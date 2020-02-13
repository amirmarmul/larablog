@extends('back.layouts.app')

@section('content')
<h3>{{ $user->name }}</h3>

<div class="card">
    <div class="card-body">
        <div class="form-group">
            <label>{{ __('Name') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ $user->name }}" readonly>
        </div>

        <div class="form-group">
            <label>{{ __('Email') }}</label>
            <input type="email" class="form-control" placeholder="{{ __('Email') }}" name="email" value="{{ $user->email }}" readonly>
        </div>
    </div>
</div>
@endsection
