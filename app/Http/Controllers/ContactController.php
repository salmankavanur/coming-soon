<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form submission
        $data = $request->all();

        // Send email
        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('salman@xperiacloud.com'); // Specify the recipient email address
            $message->subject('New Contact Form Submission');
        });

        // Flash a success message to the session
        $request->session()->flash('success', 'Thanks for submitting the form! We will reach you as soon as possible.');

        // Redirect back to the form with the success flash message
        return redirect()->back();
    }
}
