<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
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

        \Auth::login($user);

        return redirect()->route('dashboard')->with('success','Welcome Back ,' . $request->user('web')->username);
    }
}
