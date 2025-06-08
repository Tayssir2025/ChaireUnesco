<?php

namespace App\Mail;

use App\Models\Actualite;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ActualiteNewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public Actualite $actualite;

    /**
     * Create a new message instance.
     */
    public function __construct(Actualite $actualite)
    {
        $this->actualite = $actualite;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle actualité : ' . $this->actualite->titre,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.actualite-newsletter',
            with: [
                'actualite' => $this->actualite,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
