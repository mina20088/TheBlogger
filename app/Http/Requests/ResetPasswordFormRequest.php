<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required','exists:users','email']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
