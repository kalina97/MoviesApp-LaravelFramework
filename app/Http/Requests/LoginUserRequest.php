<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            'email' => 'required|regex:/^[a-z][A-z\.\-0-9]{4,35}\@[a-z]{2,5}(\.[a-z]{2,5}){1,3}$/|max:60',
            'password' => 'required|regex:/^([A-Za-z\d]){8,}$/'
        ];
    }
}
