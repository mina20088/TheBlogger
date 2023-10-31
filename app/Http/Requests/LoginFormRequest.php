<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginFormRequest extends FormRequest
{


    public bool $remember = false;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => "required|email|exists:users",
            'password' => "required"
        ];
    }


    public function authenticate() :void
    {

        $this->remember = $this->boolean('remember');

        if(Auth::viaRemember())
        {
            $this->remember = true;
        }
        $this->ensureIsNotRateLimited();

        if(!Auth::guard('web')->attempt($this->only('email','password'),$this->remember))
        {
            \RateLimiter::hit($this->input('email'),120);

            throw ValidationException::withMessages([
                'fail'=>'we cant log you in ether because  user ' . $this->input('email') . 'is not exists or email or password incorrect'
            ]);
        }

        \RateLimiter::clear($this->input('email'));

    }

    protected function ensureIsNotRateLimited(): void
    {
        if(!\RateLimiter::tooManyAttempts($this->input('email'),5))
        {
            return ;
        }

        $seconds = \RateLimiter::availableIn($this->input('email'));

        throw  ValidationException::withMessages([
            'limit'=> 'you execeded your login attempts try again after ' . ceil($seconds/60) .' min ' . ' equivalent to ' . ($seconds . ' secounds')
        ]);
    }

    public function messages(): array
    {
       return [
           'required' => ':attribute required',
           'exists' => ':attribute provided is not exists'
       ];
    }


}
