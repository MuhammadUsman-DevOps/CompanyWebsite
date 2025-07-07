<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
            'message'    => 'required',
        ]);

        Mail::to('thebilalkhancs@gmail.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
