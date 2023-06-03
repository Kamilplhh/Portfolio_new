<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
      public function sendEmail(Request $req) {
        $data=[
            'name' => $req->name,
            'email' => $req->email,
            'subject'=> $req->subject,
            'message' => $req->message
         ];
        Mail::to('reveicer@gmail.com')->send(new ContactMail($data));
        return redirect('/')->with('status', 'Message has been sent!');
    }
}
