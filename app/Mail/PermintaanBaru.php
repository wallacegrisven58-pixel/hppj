<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PermintaanBaru extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Permintaan baru ' . $this->data['kode'] . ' dari ' . $this->data['perusahaan'],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.permintaan-baru');
    }
}