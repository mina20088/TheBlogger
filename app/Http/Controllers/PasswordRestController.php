<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordFormRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;

class PasswordRestController extends Controller
{
    public function create(){
        return view('password_reset.create',['title'=>'Password_Reset']);
    }

    public function store(ResetPasswordFormRequest $request)
    {
        $status = \Password::sendResetLink(['email' => $request->only('email')]);


        if ($status === Password::RESET_THROTTLED) {
            return back()->with(['failed' => 'You Have To Create A New Token After ' . config('auth.passwords.users.throttle') . ' seconds']);
        }

        return back()->with(['success' => 'Password Link Sent To Email ' . $request->input('email')]);
    }
}
