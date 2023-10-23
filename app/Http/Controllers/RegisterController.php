<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create',['title' => 'register']);
    }


    public function store(RegisterFormRequest $request)
    {

    }
}
