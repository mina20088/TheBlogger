<?php

namespace App\Http\Middleware;

use App\Models\Session;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SessionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (Auth::check() && ! $request->session()->has('lastActivityTime')) {
            $request->session()->put('lastActivityTime', time());
        }

        $maxIdleTime = config('session.lifetime');

        if (Auth::check() && $request->session()->has('lastActivityTime') && (time() - $request->session()->get('lastActivityTime') > $maxIdleTime)) {

            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            Session::where('user_id', auth()->user()->id)->update('user_id', 'Null');

            return redirect()->route('login')->with('status',trans('auth.session_expires',['maxIdleTime'=>$maxIdleTime]));

        }

        $request->session()->put('lastActivityTime', time());

        return $next($request);;
    }
}
