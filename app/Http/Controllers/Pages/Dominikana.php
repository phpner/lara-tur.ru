<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dominikana extends Controller
{
    public function index()
    {
        return view('pages.dominikana',["menu" => 3, 'page' => 'dominikana']);
    }
}
