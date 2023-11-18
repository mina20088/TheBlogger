<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResendEmailVeificationController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('success','Verification link sent!');
    }
}
