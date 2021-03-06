<?php

namespace App\Mail;

use App\Sale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewSale extends Mailable
{
    use Queueable, SerializesModels;
   public $sale;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Sale $sale)
    {
        $this->sale = $sale;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@olandospalvelut.fi')
                    ->subject('Order Confirmation')
                    ->view('emails.sale');
    }
}
