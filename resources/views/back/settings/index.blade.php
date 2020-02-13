@extends('back.layouts.app')

@section('content')
<h3>{{ __('Settings') }}</h3>

<div class="card">
    <form method="post" action="/back/settings/{{ $setting->id }}">
        @method('put')
        @csrf

        <div class="card-header">
            <div class="card-tools text-right">
                <button type="submit" class="btn btn-outline-primary">{{ __('Submit') }}</button>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>{{ __('App Name') }}</label>
                <input type="text" class="form-control @error('app_name') is-invalid @enderror" placeholder="{{ __('App Name') }}" name="app_name" value="{{ old('app_name', $setting->app_name) }}">
                @error('app_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('App Description') }}</label>
                <input type="text" class="form-control @error('app_description') is-invalid @enderror" placeholder="{{ __('App Description') }}" name="app_description" value="{{ old('app_description', $setting->app_description) }}">
                @error('app_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Admin Email') }}</label>
                <input type="text" class="form-control @error('admin_email') is-invalid @enderror" placeholder="{{ __('Admin Email') }}" name="admin_email" value="{{ old('admin_email', $setting->admin_email) }}">
                @error('admin_email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Company Email') }}</label>
                <input type="text" class="form-control @error('company_email') is-invalid @enderror" placeholder="{{ __('Company Email') }}" name="company_email" value="{{ old('company_email', $setting->company_email) }}">
                @error('company_email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Company Phone') }}</label>
                <input type="text" class="form-control @error('company_phone') is-invalid @enderror" placeholder="{{ __('Company Phone') }}" name="company_phone" value="{{ old('company_phone', $setting->company_phone) }}">
                @error('company_phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Company Address') }}</label>
                <input type="text" class="form-control @error('company_address') is-invalid @enderror" placeholder="{{ __('Company Address') }}" name="company_address" value="{{ old('company_address', $setting->company_address) }}">
                @error('company_address') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            
            <div class="form-group">
                <label>{{ __('Facebook') }}</label>
                <input type="text" class="form-control @error('facebook_link') is-invalid @enderror" placeholder="{{ __('Facebook') }}" name="facebook_link" value="{{ old('facebook_link', $setting->facebook_link) }}">
                @error('facebook_link') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>{{ __('Instagram') }}</label>
                <input type="text" class="form-control @error('instagram_link') is-invalid @enderror" placeholder="{{ __('Instagram') }}" name="instagram_link" value="{{ old('instagram_link', $setting->instagram_link) }}">
                @error('instagram_link') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </form>
</div>
@endsection
