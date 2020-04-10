@extends('backend.master')
@section('content')

<form method="POST" action="">
    @csrf

    <x-card tieude="form.form_cart_edit">
        <div class="form-group">
            <label>{{ __('form.form_cart_user_id') }}</label>
            <select name="user_id" class="form-control">
                <option value="">Vui lòng chọn</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('form.card_cart_total') }}</label>
            <input type="text" class="form-control" name="total">
        </div>

        
    </x-card>
</form>
    
@endsection