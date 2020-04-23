@extends('backend.master')
@section('content')
@include('backend.blocks.message')

<form method="POST" action="{{ route('admin.product.update',['id' => $product->id]) }}" enctype="multipart/form-data">
    @csrf

    <x-card tieude="form.card_product_create">

        <div class="form-group">
            <label>{{ __('form.form_product_category_id') }}</label>
            <select name="category_id" class="form-control">
                <option value="0">Vui lòng chọn</option>
                @php
                    dequy_product ($category_parent,old('category_id',$product->category_id));
                @endphp
            </select>
        </div>

        <div class="form-group">
            <label>{{ __('form.form_product_name') }}</label>
        <input type="text" class="form-control" name="name" placeholder="{{ __('form.form_product_name_placeholder') }}" value="{{ old('name',$product->name) }}">
        </div>

        <div class="form-group">
            <label>{{ __('form.form_product_price') }}</label>
            <input type="number" class="form-control" name="price" value="{{ old('price',$product->price) }}">
        </div>


        <div class="form-group">
            <label>{{ __('form.form_product_intro') }}</label>
            <br />
            <textarea name="intro" cols="80" rows="5">
                {{ old('intro',$product->intro) }}
            </textarea>
            
        </div>


        <div class="form-group">
            <label>{{ __('form.form_product_content') }}</label>
            <br />
            <textarea name="content" cols="90" rows="5">
               {{ old('content',$product->content) }}
            </textarea>
            
        </div>


        <div class="form-group">
            <label>{{ __('form.form_product_image') }}</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
        </div>


        <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" {{ $product->status == 'on' ? 'checked' : '' }}>
                <label class="custom-control-label" for="customSwitch1">{{ __('form.form_product_status') }}</label>
            </div>
        </div>
    </x-card>
</form>

@endsection