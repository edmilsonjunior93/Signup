<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'name'=> 'bail|required|min:4|max:100',
            'email'=>'bail|required|email|unique:signups',
            'birthday'=>'bail|date|required|before:2021-07-03',
            'password'=>"bail|required|numeric|min:1000|max:99999999"
        ];
    }
}
