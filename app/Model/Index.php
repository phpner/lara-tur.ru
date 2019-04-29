<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\LocalPack\HttpCurl;

use App\Model\Country;
use App\Model\Calendar_price;
use App\Model\Calender_price_curort;

class Index extends Model
{
    /**
     * @var array
     */
    public $id_price = [29,68,92,87];

    /**
     * @return array
     */

    public function getPriceCalender($id_price){


    // $items =  Calendar_price::whereIn('country',$country)->get();


       $items = Country::whereIN('country_id',$id_price)->get();

       $items = DB::table('countries')->whereIn('country_id', $id_price)->get();



       // $items = Country::find(20);

        $arrRes = [];

       // $arrRes =   Calendar_price::where('country', $items[0]->id)->get();

        //dd($arrRes);
        foreach ($items as $country){
            $calendar_price =  Calendar_price::where('country', $country->country_id)->orderBy('nightfrom', 'ASC')->orderBy('nightfrom', 'ASC')->get();
            $arrRes[$country->country_id]['name'] = $country->name;
            $arrRes[$country->country_id]['country_id'] = $country->country_id;
            $arrRes[$country->country_id]['img'] =   "/img/calender/".$country->country_id.".jpg";
            $arrRes[$country->country_id]['country_price'] = $this->formatCase($calendar_price);

        }

        $result = $this->costomAdd($arrRes);

       // dd($items[0]->calendar_prices());

      return $result;
    }

    public function costomAdd($arrRes){

            $names = Resort::whereIN('resort_id',[2232,1843])->get();
            //$names = DB::select('SELECT min(`minprice`) FROM `resorts` WHERE `resort_id` IN (2232,1843)');

        foreach ($names as $name) {

            $items = DB::select('
            SELECT *  FROM `calender_price_curorts` WHERE `resort` IN ('.$name->resort_id.') AND `nightfrom` = 3 GROUP BY `checkinmonth`  HAVING  max(`minprice`) 
            UNION 
                SELECT *  FROM `calender_price_curorts` WHERE `resort` IN ('.$name->resort_id.') AND  `nightfrom` = 7  GROUP BY `checkinmonth` HAVING MIN(`minprice`)
            UNION 
                SELECT *  FROM `calender_price_curorts` WHERE `resort` IN ('.$name->resort_id.') AND  `nightfrom` = 11  GROUP BY `checkinmonth` HAVING MIN(`minprice`)
            UNION 
                SELECT *  FROM `calender_price_curorts` WHERE `resort` IN ('.$name->resort_id.') AND  `nightfrom` = 14  GROUP BY `checkinmonth` HAVING MIN(`minprice`)
            ');
            
            $arrRes[$name->resort_id]['name'] = $name->name;
            $arrRes[$name->resort_id]['country_id'] = $name->resort_id;
            $arrRes[$name->resort_id]['img'] = "/img/calender/".$name->resort_id.".jpg";
            $arrRes[$name->resort_id]['country_price'] = $this->formatCase($items);

        }

        return $arrRes;
    }
    /**
     * @param $id
     * @return mixed
     */
    public function formatCase($items){

        $arr = [];
        $html = " <div class='calendar_box'>";
        $i = 0;
           foreach ($items as $item){
              $menuActive =  ($i >= 7) ? 'hiddenClass' : '';
               $i++;
               $price = number_format($item->minprice / 2, 0, '', ',');

               $html .= "<div class='item_block $menuActive'>";

                   $html .= "<div class='date'>". $this->formaDateRus($item->checkinmonth) ."</div>";

                       $html .= "<div class=\"item_block_text\">";

                           $html .= " <div class=\"hight\"><i>$item->nightfrom</i> Ночей</div>";
                           $html .= " <div class=\"price\">$price руб.<br></div>";

                       $html .= "</div>";


               $html .= "</div>";

           }
        $html .= "</div>";
       // echo $this->build_table($arr);


        return  $html;
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

        return $rusFormat[$month].' '.date('Y',strtotime($date));
    }



}
