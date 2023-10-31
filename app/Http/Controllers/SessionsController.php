<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index(Session $sessions,Request $request)
    {
        $session =  $sessions::where('user_id',$request->user()->id)->get();
        return view('sessions.index',['title' =>'Active Session','sessions'=>$session]);
    }

}
