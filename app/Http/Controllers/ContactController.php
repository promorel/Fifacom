<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    { 
        $request->validate(
            [
                'name'=> 'required',
                'email'=> 'required',
                'phone'=> 'required',
                'subject'=> 'required',
                'message'=> 'required',

            ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to('dossousandrin@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Votre message a été bien envoyé !');
    }
}