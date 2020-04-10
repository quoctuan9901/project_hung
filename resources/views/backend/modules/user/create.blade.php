@extends('backend.master')
@section('content')

<form method="POST" action="">
    @csrf

    <x-card tieude="form.card_user_create">
        <div class="form-group">
            <label>{{ __('form.card_user_fullname') }}</label>
            <input type="text" class="form-control" name="fullname">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_email') }}</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_password') }}</label>
            <input type="text" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_re_password') }}</label>
            <input type="text" class="form-control" name="repassword">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_level') }}</label>
            <select name="level" class="form-control">
                <option value="">Vui lòng chọn</option>
            </select>
        </div>

        <div class="form-group">
            <div class="custom-control custom-switch">
                <label class="custom-control-label" for="customSwitch1">{{ __('form.card_user_status') }}</label>
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
            </div>
        </div>

        
    </x-card>
</form>
    
@endsection