<?php

namespace App\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class SubscriptionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->markdown('emails.subscription.confirmation')
                    ->subject('Subscription Confirmation');
    }
}
