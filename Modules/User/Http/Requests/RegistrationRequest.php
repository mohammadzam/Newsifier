<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:64',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'password' => 'required',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'The name number is required',
            'phone.required'=>'The phone number is required',
            'password.required'=>'The password is required',

        ];
    }

}
