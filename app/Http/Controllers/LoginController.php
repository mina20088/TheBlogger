<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.create',['title'=>'Login']);
    }

    public function store(LoginFormRequest $request)
    {

    }
}
