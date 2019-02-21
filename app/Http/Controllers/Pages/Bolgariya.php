<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Bolgariya extends Controller
{
    public function index()
    {
        return view('pages.bolgariya',["menu" => 3, 'page' => 'bolgariya']);
    }
}
