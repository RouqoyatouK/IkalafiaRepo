<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Refuser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $refuser;
    public function __construct($refuser)
    {
        $this->refuser = $refuser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $refuser =  $this->refuser;

        return $this->subject('Mail from Ikalafia.com')
        ->view('email.refuser',compact('refuser'));
    
    }
}
