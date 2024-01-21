<?php

namespace App\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackFormMail extends Mailable
{

        use Queueable, SerializesModels;

        public $formData;

        public function __construct($formData)
        {
            $this->formData = $formData;
        }

        public function build()
        {
            return $this->view('emails.feedback')->with(['formData' => $this->formData]);
        }
    }


