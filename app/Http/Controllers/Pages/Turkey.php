<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Turkey extends Controller
{
    public function index(){
        return view('pages.turkey',["menu" => 3,  'page' => 'turkey']);
    }
}
