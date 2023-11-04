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
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create',['title' => 'register']);
    }


    public function store(RegisterFormRequest $request)
    {
        $user = User::create($request->all());

        \Auth::login($user);

        event(new Registered($user),new Login('web',$user,false));

        return redirect()->route('dashboard')->with('success','Welcome Back ,' . $request->user('web')->username);
    }
}
