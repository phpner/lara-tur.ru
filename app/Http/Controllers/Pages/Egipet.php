<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Egipet extends Controller
{
    private  $weather ;

    public function __construct()
    {
        $this->weather = new \App\LocalPack\Forecast('87432bdcf35413401159ddf6925daf4d');
    }

    public function index()
    {
        $weather = $this->weather->getMydata('26.2540493','29.2675469');

        return view('Pages.egipet',["menu" => 3, 'weather' =>  $weather ]);
    }
}
