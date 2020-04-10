@extends('backend.master')
@section('content')

<form method="POST" action="">
    @csrf

    <x-card tieude="form.card_category_edit">
        <div class="form-group">
            <label>{{ __('form.form_category_parent') }}</label>
            <select name="parent" class="form-control">
                <option value="">Vui lòng chọn</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('form.form_category_name') }}</label>
            <input type="email" class="form-control" name="name" placeholder="{{ __('form.form_category_name_placeholder') }}">
        </div>

        <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Status</label>
            </div>
        </div>
    </x-card>
</form>

@endsection