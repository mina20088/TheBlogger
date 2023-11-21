<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Mail\RegistrationWelcomeEmail;

class SendWelcomeEmailNotification extends Notification
{
    public function __construct()
    {

    }

    public function via($notifiable): array
    {
        return ['mail'];
    }


    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage())
            ->subject('Welcome Email')
            ->view('emails.register_welcome',['username'=>$notifiable->username]);
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
