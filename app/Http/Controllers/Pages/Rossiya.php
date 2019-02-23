<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Rossiya extends Controller
{
    public function index()
    {
        return view('pages.rossiya',["menu" => 3, 'page' => 'rossiya']);
    }
}
