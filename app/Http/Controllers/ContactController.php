<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to($validatedData['email'])
            ->send(new ContactMail($validatedData['name'], $validatedData['email'], $validatedData['message']));

        return redirect('/')->with('success', 'Your message has been sent!');
    }
}
