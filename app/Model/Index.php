<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Model\Country;
use App\Model\Calendar_price;

class Index extends Model
{
    /**
     * @var array
     */
    public $id_price = [29,92];

    /**
     * @return array
     */

    public function getPriceCalender(){


    // $items =  Calendar_price::whereIn('country',$country)->get();


        $items = Country::whereIN('country_id',$this->id_price)->get();
       // $items = Country::find(20);


        $arrRes = [];

       // $arrRes =   Calendar_price::where('country', $items[0]->id)->get();

        //dd($arrRes);
        foreach ($items as $country){
            $arrRes[$country->country_id]['name'] = $country->name;
            $arrRes[$country->country_id]['country_id'] = $country->country_id;
            $arrRes[$country->country_id]['country_price'] = $this->formatCase($country->country_id);

        }

       // dd($items[0]->calendar_prices());
      return $arrRes;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function formatCase($id){

       $items =  Calendar_price::where('country', $id)->orderBy('nightfrom', 'ASC')->orderBy('nightfrom', 'ASC')->get();
        $arr = [];
       foreach ($items as $item){

          $arr[]  = array('id' => $id ,'night'=>$item->nightfrom,'price' =>  number_format($item->minprice, 0, '', ','),'date' => $this->formaDateRus( $item->checkinmonth));

       }
       // echo $this->build_table($arr);

        return $arr;
    }

    /**
     * @param $date
     * @return string
     */
    public function formaDateRus($date){
        $rusFormat = [
            'январь',
            'февраль',
            'март',
            'апрель',
            'май',
            'июнь',
            'июль',
            'август',
            'сентябрь',
            'октябрь',
            'ноябрь',
            'декабрь'
        ];

        $month =  date("n",strtotime($date)) -1;

        return $rusFormat[$month].' '.date('Y');
    }


    function build_table($array)
    {
        $items = DB::select('select DISTINCT `checkinmonth` FROM `calendar_prices` WHERE country = 29 ORDER BY checkinmonth');
        echo "<pre>";
        $row = count($items);
        $td = 5;
        $html = "<table>";
        for ($i=0; $i <= $row; $i++){
            $html .= "<tr>";
                for ($h=0; $h <= $td; $h++){
                    $html .= "<td>";
                    $html .= "</td>";
                }
            $html .= "</tr>";
        }
       dd($array);
    }
}
