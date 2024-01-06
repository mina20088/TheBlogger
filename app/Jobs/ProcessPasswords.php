<?php

namespace App\Jobs;

use App\Models\Passwords;
use App\Models\User;
use Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Request;

class ProcessPasswords implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected User $user;

    protected string $password;

    protected string $remember_token;

    /**
     * Create a new job instance.
     */

    public function __construct(User $user,string $password, string $remember_token )
    {
        $this->onQueue('passwords');
        $this->user = $user;
        $this->password = $password;
        $this->remember_token = $remember_token;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->user->forceFill([
            'password' => $this->password,
            'remember_token'=> $this->remember_token
        ])->save();
    }
}
