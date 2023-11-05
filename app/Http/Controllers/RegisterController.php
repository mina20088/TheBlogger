<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Mail\RegistrationWelcomeEmail;
use App\Models\ActiveLogin;
use App\Models\Session;
use App\Models\User;
use App\Notifications\SendWelcomeEmailNotification;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use Notifiable;
    public function create()
    {
        return view('register.create',['title' => 'register']);
    }


    public function store(RegisterFormRequest $request)
    {
        $user = User::create($request->all());

        \Auth::login($user);

        event(new Registered($user));

        $user->notify(new SendWelcomeEmailNotification());

        return redirect()->route('dashboard')->with('success','Welcome Back ,' . $request->user('web')->username);
    }
}
