<?php

namespace App\Http\Requests\User;

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

            'email' => ['required','unique:users,email,'.$this->id.',id'],
            'level' => 'required',
            'fullname' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required'
        ];
    }

    public function messages()
    {
        return [];
    }

    public function attributes()
    {
        return [
            'email' => mb_strtolower(trans('form.card_user_email')),
            'level' => mb_strtolower(trans('form.card_user_level')),
            'fullname' => mb_strtolower(trans('form.card_user_fullname')),
            'password' => mb_strtolower(trans('form.card_user_password')),
            'password_confirmation' => mb_strtolower(trans('form.card_user_re_password'))
        ];
    }
}
