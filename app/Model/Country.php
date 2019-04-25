<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{
    public $timestamps = false;

    public function calendar_prices()
    {
        return $this->hasMany(\App\Model\Calendar_price::class,'country_id','country_id');
    }
}
