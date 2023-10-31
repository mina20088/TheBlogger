<?php

namespace App\Http\Controllers;

use App\Models\ActiveLogin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {

        return view('dashboard.dashboard',['title'=>'Dashboard']);
    }
}
