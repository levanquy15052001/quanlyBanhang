<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'email'=>'required|email|unique:users,email',
            'name'=>'required',
            'username' => 'required',
            'password'=>'required',
            'confirm_password' =>'required'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'email.required'=>'Email Is Required',
    //         'email.email'=>'Enter a valid Email',
    //         'email.bail'=>'Email Is Required',
    //         'email.unique'=>'Email has been Taken',
    //         'username.required'=>'Username Is Required',
    //         'username.bail'=>'Username Is Required',
    //         'password.required'=>'Password Is Required',
    //         'password.bail'=>'Password Is Required'

    //     ];
    // }
}
