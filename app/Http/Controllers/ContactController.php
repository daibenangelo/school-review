<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'body' => $request->input('text')
        ];

        Mail::send('emails.contact_mail', $data, function ($message) use ($request) {
            $message->from($request->input('email'), $request->input('name'));
            $message->to('contact@bear.com');
            $message->subject('Sent through Contact Us');
        });

        return redirect('/')->with('success', 'Email sent!');
    }
}
