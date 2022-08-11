<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmitEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Aproval Form',
            'body' => 'Please Check Submit Form',
        ];

        Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
        // dd("Check Your Email");
        return redirect('/kd3/outindex')->with('success', 'New Form Input Customer Has Been Updated!');
    }
}
