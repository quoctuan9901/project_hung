@extends('backend.master')
@section('content')
@include('backend.blocks.message')

<form method="POST" action="{{ route('admin.user.store') }}">
    @csrf

    <x-card tieude="form.card_user_create">

        <div class="form-group">
            <label>{{ __('form.card_user_fullname') }}</label>
            <input type="text" class="form-control" name="fullname" placeholder="{{ __('form.card_user_fullname_placeholder') }}">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_level') }}</label>
            <select name="level" class="form-control">
                <option value="1">Admin</option>
                <option value="2">Member</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_email') }}</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_password') }}</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_re_password') }}</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>


        <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">{{ __('form.card_user_status') }}</label>
            </div>
        </div>

        
    </x-card>
</form>
    
@endsection