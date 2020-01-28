<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'ind',
        'email',
        'cemail',
        'tele',
        'menu',
        'msg',
    ];
}
