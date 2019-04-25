<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Calendar_price extends Model
{

    public function country(){
        return $this->belongsTo(\App\Model\Country::class,'country','country_id');
    }
}
