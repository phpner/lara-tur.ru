<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LocalPack\HttpCurl;
use App\Model\Index;

class Main extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $item = (new Index)->getPriceCalender();


        return view('index',["menu" => 0, 'calendar' => $item]);
    }
}
