<?php

use Illuminate\Database\Seeder;
use App\LocalPack\HttpCurl;
use App\Model\Country;
use Illuminate\Support\Facades\DB;
use App\Model\Departure_city;
use App\Model\Resort;
use App\Model\Calendar_price;
use App\Model\Calender_price_curort;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        /**
         * Получаем название стран
         */
         $httpCurl = (new HttpCurl())->getCurl('https://api.advcake.com/travelata/countries');

             foreach ($httpCurl as $id => $name) {
                    $city = new Country();

                    $city->name = $name ;
                    $city->country_id = $id;

                    $city->save();
                }


        /**
         *  Получаем Название вылета стран, городов
         */

           /*    $http = (new HttpCurl())->getCurl('https://api.advcake.com/travelata/departure-cities');


               foreach ($http as $item) {

                   $Departure_city = new Departure_city;

                   $Departure_city->name = $item->name;
                   $Departure_city->city_id = $item->id;

                   $Departure_city->save();

               }
           */

        /**
         * Получаем курорты
         */


              $http = (new HttpCurl())->getCurl('https://api.advcake.com/travelata/resorts');


               foreach ($http as $item) {

                   $Departure_city = new Resort;

                   $Departure_city->resort_id = $item->id;
                   $Departure_city->country_id = $item->country_id;
                   $Departure_city->name = $item->name;
                   $Departure_city->is_popular = $item->is_popular;
                   $Departure_city->at_filtering = $item->at_filtering;
                   $Departure_city->created_at = $item->created_at;
                   $Departure_city->updated_at = $item->updated_at;
                   $Departure_city->country_name = $item->country_name;

                   $Departure_city->save();
                   echo $item->name."\n";

               }


        /**
         *  Получаем цены на страны
         */


       $countries = Country::all();

        $link = '';

        foreach ($countries as $country){
            $link .= '&countries%5B%5D='.$country->country_id.'';
        }


        $http = (new HttpCurl())->getCurl('https://travelata.ru/pricestatistic/monthly-calendar?departureCity=2'.$link.'');

        foreach ($http->data as $item) {

            $Departure_city = new Calendar_price;

            $Departure_city->country = $item->country;
            $Departure_city->minprice = $item->minprice;
            $Departure_city->nightfrom = $item->nightfrom;
            $Departure_city->nightto = $item->nightto;
            $Departure_city->checkindate = $item->checkindate;
            $Departure_city->checkinmonth = $item->checkinmonth;

            $Departure_city->save();

            echo $item->country."\n";
        }




        /**
         * Получаем цены на курорты
         */

        $resorts_id =  DB::select("SELECT `name`, `resort_id`  FROM resorts WHERE resort_id  IN (2232, 1843)");

        foreach ($resorts_id as $item){
            $https = (new HttpCurl())->getCurl('https://travelata.ru/pricestatistic/russian-monthly-calendar?departureCity=2&resorts%5B%5D='.$item->resort_id.'');

            foreach ($https->data as  $http){
                $calender_price_curort = new Calender_price_curort;
                        $calender_price_curort->checkindate    =    $http->checkindate;
                        $calender_price_curort->resort         =    $http->resort;
                        $calender_price_curort->minprice       =    $http->minprice;
                        $calender_price_curort->checkinmonth   =    $http->checkinmonth;
                        $calender_price_curort->nightfrom      =    $http->nightfrom;
                        $calender_price_curort->nightto        =    $http->nightto;

                $calender_price_curort->save();
            }
        }

        $link = "";




/*        $link2 = "";
        foreach ($array_chunk[1] as $id){
            $link2 .= '&resorts%5B%5D='.$id->id.'';
        }

        $http = (new HttpCurl())->getCurl('https://travelata.ru/pricestatistic/monthly-calendar?departureCity=2'.$link2.'');*/

        dd( $http);

    /*
          foreach ($resorts_id as $item){
          DB::table('users')->insert([
              ['resort' => 'taylor@example.com', 'votes' => 0],
              ['email' => 'dayle@example.com', 'votes' => 0]
          ]);
      }
    */

       dd($resorts_id);
    }
}
