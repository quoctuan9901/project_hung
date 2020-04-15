@extends('backend.master')
@section('content')

@include('backend.blocks.message')

<form method="POST" action="{{ route('admin.category.store') }}">
    @csrf
    <x-card tieude="form.card_category_create">
        <div class="form-group">
            <label>{{ __('form.form_category_parent') }}</label>
            <select name="parent_id" class="form-control">
                <option value="0">ROOT</option>
                @php
                    select_dequy ($category_parent,old('parent_id'));
                @endphp
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('form.form_category_name') }}</label>
            <input type="text" class="form-control" name="name" placeholder="{{ __('form.form_category_name_placeholder') }}">
        </div>

        <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Status</label>
            </div>
        </div>
    </x-card>
</form>

@endsection