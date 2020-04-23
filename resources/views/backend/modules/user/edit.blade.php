@extends('backend.master')
@section('content')
@include('backend.blocks.message')

<form method="POST" action="{{ route('admin.user.update',['id' => $data_user->id]) }}">
    @csrf

    <x-card tieude="form.card_user_create">

        <div class="form-group">
            <label>{{ __('form.card_user_fullname') }}</label>
            <input type="text" class="form-control" name="fullname" placeholder="{{ __('form.card_user_fullname_placeholder') }}" value="{{ old('fullname',$data_user->fullname) }}">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_level') }}</label>
            <select name="level" class="form-control">
                <option value="0">ROOT</option>
                @php
                    dequy_user($level_user,old('fullname',$data_user->level));
                @endphp
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_email') }}</label>
            <input type="email" class="form-control" name="email" value="{{ old('email',$data_user->email) }}">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_password') }}</label>
            <input type="text" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_user_re_password') }}</label>
            <input type="text" class="form-control" name="password_confirmation">
        </div>


        <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" {{ $data_user->status == 'on' ? 'checked' : '' }}>
                <label class="custom-control-label" for="customSwitch1">{{ __('form.card_user_status') }}</label>
            </div>
        </div>

        
    </x-card>
</form>
    
@endsection