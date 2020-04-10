@extends('backend.master')
@section('content')

<form method="POST" action="">
    @csrf

    <x-card tieude="form.card_cart_detail_edit">
        <div class="form-group">
            <label>{{ __('form.card_product_id') }}</label>
            <select name="product_id" class="form-control">
                <option value="">Vui lòng chọn</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('form.card_cart_id') }}</label>
            <select name="cart_id" class="form-control">
                <option value="">Vui lòng chọn</option>
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('form.card_quantity') }}</label>
            <input type="text" class="form-control" name="quantity">
        </div>

        <div class="form-group">
            <label>{{ __('form.card_total') }}</label>
            <input type="text" class="form-control" name="total">
        </div>

    </x-card>
</form>

@endsection