<?php

    namespace App\Mail;

    use App\Models\User;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Mail\Mailables\Address;
    use Illuminate\Mail\Mailables\Content;
    use Illuminate\Mail\Mailables\Envelope;
    use Illuminate\Queue\SerializesModels;

    class RegistrationWelcomeEmail extends Mailable
    {
        use Queueable, SerializesModels;

        /**
         * Create a new message instance.
         */
        public function __construct(protected User $user){}

        /**
         * Get the message envelope.
         */
        public function envelope(): Envelope
        {
            return new Envelope(
                to: $this->user->email,
                subject: 'Registration Welcome Email'
            );
        }

        /**
         * Get the message content definition.
         */
        public function content(): Content
        {
            return new Content(
                view: 'emails.register_welcome',
                with: [
                    'username' => $this->user->username
                ]
            );
        }

        /**
         * Get the attachments for the message.
         *
         * @return array<int, \Illuminate\Mail\Mailables\Attachment>
         */
        public function attachments(): array
        {
            return [];
        }
    }
