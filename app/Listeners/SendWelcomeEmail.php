<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\SendWelcomeEmailNotification;
use Illuminate\Auth\Events\Registered;



class SendWelcomeEmail
{

    /**
     * Create the event listener.
     */
    public function __construct(protected User $user)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $event->user->notify(new SendWelcomeEmailNotification());
    }
}
