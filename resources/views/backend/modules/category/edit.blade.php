@extends('backend.master')
@section('content')

@include('backend.blocks.message')

<form method="POST" action="{{ route('admin.category.update',['id' => $category->id]) }}">
    @csrf

    <x-card tieude="form.card_category_edit">
        <div class="form-group">
            <label>{{ __('form.form_category_parent') }}</label>
            <select name="parent_id" class="form-control">
                <option value="0">Vui lòng chọn</option>
                @php
                    select_dequy ($category_parent,old('parent_id',$category->parent_id));
                @endphp
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('form.form_category_name') }}</label>
            <input type="text" class="form-control" name="name" placeholder="{{ __('form.form_category_name_placeholder') }}" value="{{ old('name',$category->name) }}">
        </div>

        <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" {{ $category->status == 'on' ? 'checked' : '' }}>
                <label class="custom-control-label" for="customSwitch1">Status</label>
            </div>
        </div>
    </x-card>
</form>

@endsection