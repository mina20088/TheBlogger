<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


class EmailVerificationController extends Controller
{
    public function index()
    {
        return view('verification.notice',['title'=>'Verification Notice']);
    }

    public function store(EmailVerificationRequest $request)
    {
        if($request->user()->hasVerifiedEmail())
        {
            return redirect()->intended('dashboard');
        }
        if($request->user()->markEmailAsVerified()){
            event(new Verified($request->user()));
        }

        return redirect()->intended('dashboard');
    }
}
