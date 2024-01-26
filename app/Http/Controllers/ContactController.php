<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackFormMail;
use App\Models\Contact;
class ContactController extends Controller

{
    public function index(){
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|numeric',
            'service' => 'required|string',
            'comment' => 'required|string',
        ]);
        Contact::create($request->all());
        return redirect()->back()
                         ->with(['success' => 'Таны мэдээлэл амжилттай илгээгдлээ. Бид тун удахгүй холбогдох болно.']);
    }
}




