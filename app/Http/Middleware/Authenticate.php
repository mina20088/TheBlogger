<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {

        if(!$request->hasValidSignature() && !Auth::check() && $request->is('verify-email/*')){
            redirect()->route('login')->with('failed','Please login to verify');
        }else{
            redirect()->route('login')->with('failed','You are not authorized to access this page');
        }
        return null;
        
    }

}
