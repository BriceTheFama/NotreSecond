<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;
class ContactController extends Controller
{
    //
    public function contact()
    {
        # code...
        return view('contact');
    }
    public function sendEmail(Request $request)
    {
        # code...
        $details=[
            'email'=>$request->email,
            'requete'=>$request->requete,
            'message'=>$request->message,
            
        ];
        Mail::to('fglamou@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Votre message a bien été envoyé');
    }
}
