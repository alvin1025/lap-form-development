<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Kd3ReqMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $kd3;

    public function __construct($kd3)
    {
        $this->kd3 = $kd3;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Aproval Notifications KD03 Request Cust No: '.$this->kd3['no_cust']. ' Customer Code '. $this->kd3['nama'])
        ->view('dashboard.salesFolder.email.kd03ReqMail');

        return $this;
    }
}
