<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\RequestFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        Mail::to('info@neptunecorporate.com')->send(new ContactFormMail($request->all()));

        $message = 'Email sent successfully';

        return view('contact')->with('message', $message);
    }
    public function request(Request $request)
    {
        Mail::to('info@neptunecorporate.com')->send(new RequestFormMail($request->all()));
      
        $message = 'Consultation Request sent successfully';

        return view('corporate.ibc-formation')->with('message', $message);
    }
}
