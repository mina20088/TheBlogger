<?php

namespace App\Http\Controllers;


use App\Events\BeforePasswordRest;
use App\Listeners\AddPasswordToOldPassword;
use App\Models\OldPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Str;

class PasswordRestingController extends Controller
{
    public function create(string $email, string $token)
    {
        return view('password_restting.create',['title'=>'Resetting Password','token' => $token, 'email'=> $email]);
    }

    public function store(Request $request)
    {

        $user = User::with('passwords')->where('email','minaremonshaker@gmail.com')->first();

        $passwords = $user->passwords->pluck('password');


        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);


        foreach ($passwords as $pass)
        {
            if((Hash::check($request->input('password'), $pass))){
                return back()->with(['failed' => 'This Password Is Used Before Please Use Another password']);
            }
        }

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new BeforePasswordRest($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login.create')->with(['success'=>'Your Password Has Been Changed '])
            : back()->with(['failed' => 'Your Password Reset Token Has Expired']);
    }
}
