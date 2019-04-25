<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LocalPack\HttpCurl;

class Vetnam extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $url = "https://api.advcake.com/travelata/cheapest-tours?link_hash=4d3050a929d62b99&countries%5B0%5D=22&checkInDateRange%5Bfrom%5D=2019-05-15&checkInDateRange%5Bto%5D=2019-06-10&departureCity=2&nightRange%5Bfrom%5D=7&nightRange%5Bto%5D=10&touristGroup%5Badults%5D=2&touristGroup%5Bkids%5D=0&touristGroup%5Binfants%5D=0&resorts%5B0%5D=403&resorts%5B1%5D=404&resorts%5B2%5D=405&resorts%5B3%5D=3385&resorts%5B4%5D=408&resorts%5B5%5D=413&resorts%5B6%5D=416&resorts%5B7%5D=417&resorts%5B8%5D=424&resorts%5B9%5D=427&resorts%5B10%5D=428&resorts%5B11%5D=429&resorts%5B12%5D=430&resorts%5B13%5D=431&resorts%5B14%5D=432&resorts%5B15%5D=433&resorts%5B16%5D=434&resorts%5B17%5D=435&resorts%5B18%5D=436";

        $hot_items = (new HttpCurl())->getCurlResult($url);

        return view('pages.egipet',["menu" => 3, 'page' => 'vetnam','hot_items' => $hot_items]);
    }
}
