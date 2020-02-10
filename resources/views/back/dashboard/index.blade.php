@extends('back.layouts.app')

@section('content')
<h3>Dashboard</h3>
<div class="card">
    <div class="card-header">Welcome, {{ Auth::user()->name }}</div>

    <div class="card-body">
        You are logged in!
    </div>
</div>
@endsection
