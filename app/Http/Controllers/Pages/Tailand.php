<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Tailand extends Controller
{
    public function index()
    {
        return view('pages.tailand',["menu" => 3, 'page' => 'tailand']);
    }
}
