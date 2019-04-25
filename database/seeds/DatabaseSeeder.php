<?php

use Illuminate\Database\Seeder;
use App\LocalPack\HttpCurl;
use App\Model\Country;
use App\Model\Departure_city;
use App\Model\Resort;
use App\Model\Calendar_price;


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


        $httpCurl = (new HttpCurl())->getCurl('https://api.advcake.com/travelata/countries');

        foreach ($httpCurl as $id => $name) {
            $city = new Country();

            $city->name = $name ;
            $city->country_id = $id;

            $city->save();
        }
        /*
               $http = (new HttpCurl())->getCurl('https://api.advcake.com/travelata/departure-cities');


               foreach ($http as $item) {

                   $Departure_city = new Departure_city;

                   $Departure_city->name = $item->name;
                   $Departure_city->city_id = $item->id;

                   $Departure_city->save();

               }


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

               }   */

        /**
         *  3
         */


        $countries = Country::all();

foreach ($countries as $country) {
    //echo $country->name;
    $http = (new HttpCurl())->getCurl('https://travelata.ru/pricestatistic/monthly-calendar?departureCity=2&countries%5B%5D='.$country->country_id.'');
    $data = (array) $http->data;
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
}

    }
}
