<?php

namespace App\Mail;

use App\Models\Customer;
use App\Models\VirtualMachine;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExpirationReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $client;

    public function __construct( $client)
    {
        $this->client = $client;
    }

    public function build()
    {
        return $this->markdown('emails.expiration-reminder')
            ->subject('Lembrete de Expiração');
    }
}
