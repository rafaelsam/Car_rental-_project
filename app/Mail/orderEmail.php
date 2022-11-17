<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class orderEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_order)
    {
        // passing the order data to email
        $this->order_email_data = $data_order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'), 'alhusnaintradersltd')->subject("Welcome to Alhusnain Traders limited")->view('mail.orderEmailView', ['order_email_data' => $this->order_email_data]);
    }
}
