<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Translation\PotentiallyTranslatedString;
use Illuminate\Validation\Concerns\ValidatesAttributes;


class validatePasswordExists  implements ValidationRule
{
    use ValidatesAttributes;
    public function __construct(public string $email){}


    /**
     * Run the validation rule.
     *
     * @param Closure(string): PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $user = User::with('passwords')->where('email',$this->email)->first();

        $passwords = $user->passwords->pluck('password');

        foreach ($passwords as $pass)
        {
            if((Hash::check($value, $pass))){
                $fail("This {$attribute} Is Used Before Please Use Another password");
            }

        }

    }
}
