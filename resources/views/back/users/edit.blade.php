@extends('back.layouts.app')

@section('content')
<h3>{{ __('Edit User') }}</h3>

<div class="card">
    <form method="post" action="/back/users/{{ $user->id }}">
        @method('put')
        @csrf

        <div class="card-header">
            <div class="card-tools text-right">
                <button type="submit" class="btn btn-outline-primary">{{ __('Submit') }}</button>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Name') }}</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name', $user->name) }}">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Email') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email', $user->email) }}" readonly>
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Password') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Password Confirmation') }}</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password Confirmation" name="password_confirmation">
                @error('password_confirmation') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </form>
</div>
@endsection