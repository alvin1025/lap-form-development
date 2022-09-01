<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use phpDocumentor\Reflection\Types\This;

class Kd6ReqMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $kd6;
    public function __construct($kd6)
    {
        $this->kd6 = $kd6;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Aproval Notifications KD06 Request Cust No: '. $this->kd6['no_cust']. ' SD: ' .$this->kd6['nama']. ' SG: '. $this->kd6['sg'])
        ->view('dashboard.salesFolder.email.kd06ReqMail');

        return $this;
    }
}
