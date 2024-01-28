<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;

    public function __construct($usuario)
    {
        $this->usuario = $usuario;
    }

    public function envelope()
    {
        return new Envelope(
            from: new Address('employhub27@gmail.com'),
            subject: 'Bienvenido EmployHub',
        );
    }

    public function content()
    {
        // return new Content(
        //     view: 'mails.welcome.blade',
        //     with: [
        //         'usuario' => $this->usuario
        //     ]
        // );

        return new Content(
            view: 'mails.welcome',
            with: [
                'usuario' => $this->usuario
            ]
        );
    }

    public function attachments()
    {
        return [];
    }
}