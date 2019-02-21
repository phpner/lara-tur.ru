<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Indoneziya extends Controller
{
    public function index()
    {
        return view('pages.indoneziya',["menu" => 3, 'page' => 'indoneziya']);
    }
}
