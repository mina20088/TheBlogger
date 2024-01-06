<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;

class IsOldPassword implements ValidationRule
{

    protected string $email;

    public function __construct(string $email)
    {
        $this->email = $email; 
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
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
