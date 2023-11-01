<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Models\ActiveLogin;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.create',['title'=>'Login']);
    }

    public function store(LoginFormRequest $request)
    {



        $request->authenticate();

        if($request->remember)
        {
            ActiveLogin::create([
                'user_id' => $request->user()->id,
                'session_id' =>  $request->session()->getId(),
                'ip_address' =>  $request->ip(),
                'user_agent' => $request->userAgent(),
                'status' => 1
            ]);
            return redirect()->route('home.index')->with('success','Welcome Back ,' . $request->user()->username);
        }

        session()->regenerate();

        ActiveLogin::create([
            'user_id' => $request->user()->id,
            'session_id' =>  $request->session()->getId(),
            'ip_address' =>  $request->ip(),
            'user_agent' => $request->userAgent(),
            'status' => 1
        ]);

        return redirect()->route('dashboard')->with('success','Welcome Back ,' . $request->user()->username);
    }
}
