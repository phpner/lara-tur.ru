<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LocalPack\HttpCurl;
use Illuminate\Support\Facades\DB;


class Egipet extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $url = "https://api.advcake.com/travelata/cheapest-tours?link_hash=4d3050a929d62b99&countries%5B0%5D=29&checkInDateRange%5Bfrom%5D=2019-05-15&checkInDateRange%5Bto%5D=2019-06-10&departureCity=2&nightRange%5Bfrom%5D=7&nightRange%5Bto%5D=10&touristGroup%5Badults%5D=2&touristGroup%5Bkids%5D=0&touristGroup%5Binfants%5D=0&resorts%5B0%5D=586&resorts%5B1%5D=3384&resorts%5B2%5D=589&resorts%5B3%5D=590&resorts%5B4%5D=591&resorts%5B5%5D=592&resorts%5B6%5D=593&resorts%5B7%5D=594&resorts%5B8%5D=595&resorts%5B9%5D=596&resorts%5B10%5D=597&resorts%5B11%5D=598&resorts%5B12%5D=3423&resorts%5B13%5D=599&resorts%5B14%5D=2096&resorts%5B15%5D=2098&resorts%5B16%5D=2100&resorts%5B17%5D=2103";

        $hot_items = (new HttpCurl())->getCurlResult($url);

      $res =  DB::select('SELECT * FROM `resorts` WHERE country_id = 29 AND is_popular = true');

      dd($res);

        return view('pages.egipet',["menu" => 3, 'page' => 'egipet','hot_items' => $hot_items]);
    }
}
