<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Kd11ReqMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $kd11;
    public function __construct($kd11)
    {
        $this->kd11 = $kd11;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Aproval Notifications KD11 Request Cust No: '.$this->kd11['no_cust']. ' Association No: ' .$this->kd11['nama'])
        ->view('dashboard.salesFolder.email.kd11ReqMail');

        return $this;
    }
}
