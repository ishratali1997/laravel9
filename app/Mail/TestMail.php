<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Test',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.test',
        );
    }

    public function attachments()
    {
        return [];
    }
}
