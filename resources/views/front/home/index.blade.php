@extends('front.layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/back') }}">{{ Auth::user()->name }}</a>
                @else
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                {{ config('app.name') }}
            </div>
        </div>
    </div>
@endsection