<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Egipet extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {


        return view('pages.egipet',["menu" => 3, 'page' => 'egipet']);
    }
}
