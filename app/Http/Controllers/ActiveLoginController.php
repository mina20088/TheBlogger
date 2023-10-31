<?php

namespace App\Http\Controllers;

use App\Models\ActiveLogin;
use Illuminate\Http\Request;

class ActiveLoginController extends Controller
{
    public function index(ActiveLogin $activeLogin)
    {
        return view('active-logins.index',['title' => 'Logins','active_logins' => $activeLogin::all()]);
    }

}
