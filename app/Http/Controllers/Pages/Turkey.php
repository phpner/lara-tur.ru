<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class Turkey extends Controller
{
    public function index(){

        $path = storage_path();

        SitemapGenerator::create('http://lara-tur.ru/')
            ->hasCrawled(function (Url $url) {
                if ($url->segment(1) === 'contact') {
                    return;
                }

                return $url;
            })
            ->writeToFile('D:\OSPanel\domains\lara-tur.ru');
        return view('pages.turkey',["menu" => 3,  'page' => 'turkey']);
    }
}
