<?php

namespace App\Listeners;

use App\Notifications\SendVerficationSuccessEmail;
use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendSuccessVerficationEmail
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
    public function handle(Verified $event): void
    {
        $event->user->notify(new SendVerficationSuccessEmail());
    }
}
