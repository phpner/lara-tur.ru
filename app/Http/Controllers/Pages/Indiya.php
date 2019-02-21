<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Indiya extends Controller
{
    public function index()
    {
        return view('pages.indiya',["menu" => 3, 'page' => 'indiya']);
    }
}
