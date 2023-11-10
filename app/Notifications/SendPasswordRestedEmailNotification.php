<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendPasswordRestedEmailNotification extends Notification
{
    public function __construct(protected User $user)
    {
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Password Resisted Confirmation')
            ->view('emails.susseful_password_reset',['user'=>$this->user]);
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
