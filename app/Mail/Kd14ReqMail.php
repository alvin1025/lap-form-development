<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Kd14ReqMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $kd14;
    public function __construct($kd14)
    {
        $this->kd14 = $kd14;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Aproval Notifications KD14 Request Cust No: '. $this->kd14['no_cust']. ' CP: '. $this->kd14['nama'])
        ->view('dashboard.salesFolder.email.kd14ReqMail');

        return $this;
    }
}
