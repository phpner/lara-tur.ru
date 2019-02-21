<?php
/**
 * Created by PhpStorm.
 * User: phpner
 * Date: 21.02.2019
 * Time: 18:25
 */

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Oae
{
    public function index()
    {
        return view('pages.oae',["menu" => 3, 'page' => 'oae']);
    }

}
