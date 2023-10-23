<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;


class RegisterFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'firstname' => ['required'],
            'lastname' => ['required'],
            'username' =>['required','unique:users','min:3','max:30','alpha_num:ascii'],
            'phone' => ['required','unique:users','numeric'],
            'email' => ['required','unique:users','email'],
            'password' => ['required','confirmed',Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised(3)],
            'repeat_password' =>['required']
        ];
    }



    public function messages(): array
    {
       return [
           'required' => ':attribute required'
       ];
    }
}
