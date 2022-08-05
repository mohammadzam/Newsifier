<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
{
    public function rules()
    {
        return [
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:10',
            'password' => 'required',

        ];
    }

    public function messages(): array
    {
        return [
            'phone.required'=>'The phone number is required',
            'password.required'=>'The password is required',

        ];
    }

}
