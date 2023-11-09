<?php

namespace App\Listeners;

use App\Models\OldPassword;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddPasswordToOldPassword
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
    public function handle($event): void
    {
        OldPassword::create([
             'user_id' => $event->user->id,
             'password' => $event->user->getAuthPassword()

        ]);
    }
}
