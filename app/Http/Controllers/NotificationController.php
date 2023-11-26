<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index(){
        $userNotification = Auth::user()->notifications;

        return view('notification',['title'=>'notification','notifications'=> $userNotification]);
    }
}
