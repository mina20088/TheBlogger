<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Middleware\ValidateSignature as Middleware;
use Illuminate\Support\Facades\Auth;

class ValidateSignature extends Middleware
{
    /**
     * The names of the query string parameters that should be ignored.
     *
     * @var array<int, string>
     */
    protected $except = [
        // 'fbclid',
        // 'utm_campaign',
        // 'utm_content',
        // 'utm_medium',
        // 'utm_source',
        // 'utm_term',
    ];

    public function handle($request, Closure $next, ...$args){

        if(!$request->hasValidSignature())
        {
            return redirect()->route('verification.notice',)->with('failed','verification link expired please re-send a new verification link');
        }

        return $next($request);
    }
}
