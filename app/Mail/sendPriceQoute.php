<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendPriceQoute extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_quote)
    {
        //
        $this->quote_email_data = $data_quote;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'), 'alhusnaintradersltd')->subject("Welcome to Alhusnain Traders limited")->view('mail.send_price_quote', ['quote_email_data' => $this->quote_email_data]);
    }
}
