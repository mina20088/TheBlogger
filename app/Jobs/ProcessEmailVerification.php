<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use App\Notifications\SendEmailVerificationNotification;

class ProcessEmailVerification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected User $user;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->onQueue('email');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->user->notify(new SendEmailVerificationNotification());
    }
}
