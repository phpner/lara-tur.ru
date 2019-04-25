<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Departure_city extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'city_id',
    ];
    //
}
