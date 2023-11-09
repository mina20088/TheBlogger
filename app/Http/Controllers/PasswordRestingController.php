<?php

namespace App\Http\Controllers;


use App\Events\BeforePasswordRest;
use App\Http\Requests\PasswordRestFormRequest;
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

    public function store(PasswordRestFormRequest $request)
    {


        $status = $request->resetPassword();

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login.create')->with(['success'=>'Your Password Has Been Changed '])
            : back()->with(['failed' => 'Your Password Reset Token Has Expired']);
    }
}
