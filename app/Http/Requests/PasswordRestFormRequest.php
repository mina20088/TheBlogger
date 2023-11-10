<?php

namespace App\Http\Requests;

use App\Events\BeforePasswordRest;
use App\Models\User;
use App\Rules\validatePasswordExists;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class PasswordRestFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'token' => ['required'],
            'email' => ['required','email'],
            'password' => ['required','confirmed', \Illuminate\Validation\Rules\Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised(3),new validatePasswordExists($this->input(
                'email'
            ))]
        ];
    }


    public function resetPassword()
    {
        return Password::reset(
            $this->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password)
            {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                event(new BeforePasswordRest($user));

                $user->save();
            }
        );
    }
}
