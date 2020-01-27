<?php

namespace App;

// use App\Faq;
use Illuminate\Database\Eloquent\Model;

class SubFaq extends Model
{
    function relationFaq()
    {
        return $this->hasOne('App\Faq', 'id', 'faq');
    }
}
