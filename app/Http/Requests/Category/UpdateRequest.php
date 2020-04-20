<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => ['required','unique:category,name,'.$this->id.',id']
        ];
    }

    public function messages()
    {
        return [];
    }

    public function attributes()
    {
        return [
            'name' => mb_strtolower(trans('form.form_category_name'))
        ];
    }
}
