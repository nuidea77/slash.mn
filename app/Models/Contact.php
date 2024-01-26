<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Mailgun;

class contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';


    public $fillable = ['name', 'position','email', 'number', 'service', 'comment'];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "info@slash.mn";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
