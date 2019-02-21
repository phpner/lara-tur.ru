<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Tanzaniya extends Controller
{
    public function index()
    {
        return view('pages.tanzaniya',["menu" => 3, 'page' => 'tanzaniya']);
    }
}
