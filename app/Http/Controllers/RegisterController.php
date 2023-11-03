<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Mail\RegistrationWelcomeEmail;
use App\Models\ActiveLogin;
use App\Models\Session;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create',['title' => 'register']);
    }


    public function store(RegisterFormRequest $request)
    {
        $user = User::create($request->all());

        event(new Registered($user));

        \Auth::login($user);

        ActiveLogin::create([
            'user_id' => \Auth::user()->id,
            'session_id' => \session()->getId(),
            'ip_address' =>  $request->ip(),
            'user_agent' => $request->userAgent(),
            'status' => 1
        ]);

        return redirect()->route('dashboard')->with('success','Welcome Back ,' . $request->user('web')->username);
    }
}
