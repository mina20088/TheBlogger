<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordFormRequest;
use Illuminate\Http\Request;

class PasswordRestController extends Controller
{
    public function create(){
        return view('password_reset.create',['title'=>'Password_Reset']);
    }

    public function store(ResetPasswordFormRequest $request)
    {

    }
}
