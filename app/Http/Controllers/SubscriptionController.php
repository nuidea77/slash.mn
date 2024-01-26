<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackFormMail;
use App\Models\Subscriber;
class SubscriptionController extends Controller

{


    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',

        ]);
        Subscriber::create($request->all());
        return redirect()->back()
                         ->with(['success' => 'Таны и-мэйл амжилттай баталгаажлаа. Бид тун удахгүй шинэ мэдээ мэдээлэл танд илгээх болно.']);
    }
}




