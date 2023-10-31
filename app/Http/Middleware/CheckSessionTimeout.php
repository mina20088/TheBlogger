<?php

namespace App\Http\Middleware;

use App\Models\ActiveLogin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSessionTimeout
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && ! $request->session()->has('lastActivityTime')) {
            $request->session()->put('lastActivityTime', time());
        }

        $maxIdleTime = config('session.lifetime');

        if (Auth::check() && $request->session()->has('lastActivityTime') && (time() - $request->session()->get('lastActivityTime') > $maxIdleTime)) {

            ActiveLogin::where('session_id' , $request->session()->getId())->update(['logout' => now(), 'status' => 0]);

            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->route('login.create')->with('logout','You Have been Login  Because Of' . $maxIdleTime . 'Of Inactivity');

        }

        $request->session()->put('lastActivityTime', time());

        return $next($request);
    }
}
