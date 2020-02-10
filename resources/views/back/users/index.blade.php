@extends('back.layouts.app')

@section('content')
<h3>{{ __('Users') }}</h3>

<div class="card">
    <div class="card-header">
        <div class="card-tools text-right">
            <a class="btn btn-outline-primary" href="/back/users/create">{{ __('Create User') }}</a>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped datatable" data-ajax="/back/users/datatable">
            <thead>
                <th data-data="id">{{ __('ID') }}</th>
                <th data-data="name">{{ __('Name') }}</th>
                <th data-data="email">{{ __('Email') }}</th>
                <th data-data="created_at" data-class="text-center">{{ __('Created At') }}</th>
                <th data-data="updated_at" data-class="text-center">{{ __('Updated At') }}</th>
                <th data-data="action" data-class="text-center">{{ __('Action') }}</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection
