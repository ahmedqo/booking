<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Alert extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->data['subject'],
            from: $this->data['from'],
            to: is_array($this->data['to']) ? $this->data['to'] : [$this->data['to']],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.alert',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
