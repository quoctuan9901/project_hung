@extends('backend.master')
@section('content')

<form method="POST" action="">
    @csrf

    <x-card tieude="form.card_product_edit">
        <div class="form-group">
            <label>{{ __('form.form_product_name') }}</label>
            <input type="text" class="form-control" name="name" placeholder="{{ __('form.form_product_name_placeholder') }}">
        </div>

        <div class="form-group">
            <label>{{ __('form.form_product_price') }}</label>
            <input type="text" class="form-control" name="price">
        </div>


        <div class="form-group">
            <label>{{ __('form.form_product_intro') }}</label>
            <br />
            <textarea name="intro" cols="80" rows="5"></textarea>
            
        </div>


        <div class="form-group">
            <label>{{ __('form.form_product_content') }}</label>
            <br />
            <textarea name="content" cols="90" rows="5"></textarea>
            
        </div>


        <div class="form-group">
            <label>{{ __('form.form_product_image') }}</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
        </div>


        <div class="form-group">
            <div class="custom-control custom-switch">
                <label class="custom-control-label" for="customSwitch1">{{ __('form.form_product_status') }}</label>
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
            </div>
        </div>
        
        <div class="form-group">
            <label>{{ __('form.form_product_category_id') }}</label>
            <select name="parent" class="form-control">
                <option value="">Vui lòng chọn</option>
            </select>
        </div>
      
        
    </x-card>
</form>

@endsection