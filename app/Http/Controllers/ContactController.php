<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackFormMail;

class ContactController extends Controller
{

    public function submitFeedback(Request $request)
    {
        // Validate the form data (customize validation rules as needed)
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|numeric',
            'service' => 'required|string',
            'comments' => 'required|string',
        ]);

        // Send an email with the form data
        Mail::to('info@slash.mn')->send(new FeedbackFormMail($validatedData));

        // You might also want to redirect the user to a thank-you page
        return redirect()->route('thankYouPage');
    }
}

