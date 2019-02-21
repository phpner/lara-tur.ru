<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Shri_lanka extends Controller
{
    public function index()
    {
        return view('pages.shri_lanka',["menu" => 3, 'page' => 'shri-lanka']);
    }
}
