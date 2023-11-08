<?php

namespace App\Notifications;

use App\Mail\RegistrationWelcomeEmail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendRestEmailNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function     __construct(
        protected  string $token
    ){}

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(User $user):MailMessage
    {
        return(new MailMessage())
            ->subject('Reset Password Email')
            ->view('emails.reset_password',['token'=> $this->token,'user'=>$user]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
