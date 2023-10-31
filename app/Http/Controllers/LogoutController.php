<?php

namespace App\Http\Controllers;

use App\Models\ActiveLogin;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {

        ActiveLogin::where('session_id' , $request->session()->getId())->update(['logout' => now(), 'status' => 0]);

        \Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.create')->with('logout','You Login Out Successfully');
    }
}
