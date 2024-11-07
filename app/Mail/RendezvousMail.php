<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

;

class RendezvousMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))  // Utilisation de l'adresse configurée dans .env
                    ->subject("Garage Auto Service La Patience")
                    ->view('rendezvousmail')  // Vue de l'email
                    ->with('data', $this->data);  // Passer les données à la vue
    }
}