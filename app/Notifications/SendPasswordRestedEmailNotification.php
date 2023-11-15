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

    public function via(Object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        $created_at = $notifiable->passwords->where('user_id',$notifiable->id)->last()->created_at;

        return (new MailMessage)
            ->subject('Password Resisted Confirmation')
            ->view('emails.susseful_password_reset',[
                'user'=>$notifiable,
                'created_at'=>$created_at
            ]);
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
