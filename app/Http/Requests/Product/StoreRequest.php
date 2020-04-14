<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:product,name',
            'price' => 'required',
            'intro' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [];
    }

    public function attributes()
    {
        return [
            'name' => mb_strtolower(trans('form.form_product_name')),
            'price' => mb_strtolower(trans('form.form_product_price')),
            'intro' => mb_strtolower(trans('form.form_product_intro')),
            'content' => mb_strtolower(trans('form.form_product_content')),
            'category_id' => mb_strtolower(trans('form.form_product_category_id'))
        ];
    }
}
