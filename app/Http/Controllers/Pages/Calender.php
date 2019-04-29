<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\LocalPack\HttpCurl;
use App\Model\Index;
use App\Model\Country;

class Calender extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
         $items = Country::all();

        $items = DB::select('SELECT * FROM countries');


        $id = [];
        foreach ($items as $item){
            $id[$item->country_id] = $item->country_id;
        }

        $condition = implode(',', $id);
        $res = (new Index)->getPriceCalender([1,3,119,4,6,13,20,22,24,26,129,28,29,32,33,34,35,38,39,41,42,43,44,48,50,53,56,57,60,68,75,76,78,87,88,91,92,98,99,101,104,105,110,116]);


        return view('pages.calender',["menu" => 7,'calendar' => $res]);
    }
}
