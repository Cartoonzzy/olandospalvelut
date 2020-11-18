<?php

namespace App\Mail;

use App\Info;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewInfo extends Mailable
{
    use Queueable, SerializesModels;
   public $info;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Info $info)
    {
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@olandospalvelut.fi')
        ->view('emails.info');
    }
}
