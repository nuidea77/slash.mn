<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// SubscriptionController.php

use App\Mail\SubscriptionConfirmation;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Send the email to the specified address
        $to = 'info@slash.mn';
        $subject = 'New Subscriber';
        $message = "A new user has subscribed to the newsletter.\n\nEmail: {$request->email}";

        // Use additional headers if needed (e.g., headers for HTML email)
        $headers = 'From: webmaster@example.com';

        // Send the email
        mail($to, $subject, $message, $headers);

        // Send subscription confirmation email
        Mail::to($request->email)->send(new SubscriptionConfirmation());

        return redirect()->back()->with('success', 'Thank you for subscribing! Confirmation email sent.');
    }
}
