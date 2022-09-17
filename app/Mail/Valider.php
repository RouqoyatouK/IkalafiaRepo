<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Valider extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $valider;
    public function __construct($valider)
    {
        $this->valider = $valider;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $valider =  $this->valider;

        return $this->subject('Mail from Ikalafia.com')
        ->view('email.valider',compact('valider'));
        
    }
}
