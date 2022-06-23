<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
Use App\Models\Login;
use Illuminate\Queue\SerializesModels;

class Testing extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public $sub;
    public $suborder;
    public function __construct()
    {
        $this->suborder = $suborder;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->view('mail.email');
    }
}
