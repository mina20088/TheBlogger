<?php

namespace App\Http\Middleware;

use App\Models\OldPassword;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $user_password = User::where('email', \request('email'))->first();
        $passwords = OldPassword::all();

        foreach ($passwords as $password)
        {
            if(!Hash::check($user_password->password, $password->password))
            {
                return back()->with('failed','You Used This Password Before Please Chose another Password');
            }
        }
        return $response;

    }
}
