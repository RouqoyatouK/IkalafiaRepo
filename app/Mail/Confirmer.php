<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Confirmer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $confirmer;
    public function __construct($confirmer)
    {
        $this->confirmer = $confirmer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $confirmer =  $this->confirmer;

        return $this->subject('Mail from Ikalafia.com')
        ->view('email.confirmer',compact('confirmer'));
        
    }
}
