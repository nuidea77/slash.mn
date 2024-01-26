<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;
use Mailgun;

class Subscriber extends Model
{
    use HasFactory;
    protected $table = 'subscribers';


    public $fillable = ['email'];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "info@slash.mn";
            Mail::to($adminEmail)->send(new SubscriptionConfirmation($item));
        });
    }
}
