<?php

namespace App\Providers;


use App\Events\BeforePasswordRest;
use App\Listeners\AddPasswordToOldPassword;
use App\Listeners\AddUserToActiveLogins;
use App\Listeners\SendPasswordRestConfirmationNotification;
use App\Listeners\SendSuccessVerficationEmail;
use App\Listeners\SendWelcomeEmail;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            AddUserToActiveLogins::class,
            SendWelcomeEmail::class,
            AddPasswordToOldPassword::class
        ],

        BeforePasswordRest::class => [
            AddPasswordToOldPassword::class
        ],

        PasswordReset::class => [
            SendPasswordRestConfirmationNotification::class
        ],

        Verified::class =>[
            SendSuccessVerficationEmail::class
        ]
    ];


    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
