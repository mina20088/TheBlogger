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

        if(!$request->hasValidSignature() && !Auth::check()){
           redirect()->route('login')->with('failed','you are not authorized to access this page while you are not logged in');
        }
        return null;
        
    }

}
