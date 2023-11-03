<?php

namespace App\Listeners;

use App\Models\ActiveLogin;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddUserToActiveLogins
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        ActiveLogin::create([
            'user_id' => \Auth::user()->id,
            'session_id' => \session()->getId(),
            'ip_address' =>  request()->ip(),
            'user_agent' => request()->userAgent(),
            'status' => 1
        ]);
    }
}
