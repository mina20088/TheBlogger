<?php

namespace App\Jobs;

use App\Models\User;
use App\Notifications\SendPasswordResetConfirmationNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessPasswordRestConfirmationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected User $user;
    /**
     * Create a new job instance.
     */
    public function __construct(User $user)
    {
        $this->onQueue('email');

        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->user->notify(
            new SendPasswordResetConfirmationNotification()
        );
    }
}
