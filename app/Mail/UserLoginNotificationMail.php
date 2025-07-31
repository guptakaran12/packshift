<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserLoginNotificationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user,$dashboardUrl,$isAdmin;

    public function __construct($user,$isAdmin = false)
    {
        $this->user = $user;
        $this->dashboardUrl = url('/dashboard');
        $this->isAdmin = $isAdmin;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to PackShift - Your Moving Partner',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.login-user',
            with: [
                'user' => $this->user,
                'dashboardUrl' => $this->dashboardUrl,
                'isAdmin' => $this->isAdmin,
            ]
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
