<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Meksika extends Controller
{
    public function index()
    {
        return view('pages.meksika',["menu" => 3, 'page' => 'meksika']);
    }
}
