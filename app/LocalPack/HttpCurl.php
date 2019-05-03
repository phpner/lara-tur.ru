<?php


namespace App\LocalPack;


class HttpCurl
{
    public $name = [];
    public $item =[];
    public  function getCurl($url){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url); // set url to post to
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
        curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s
            //curl_setopt($ch, CURLOPT_POST, 1); // set POST method
            //curl_setopt($ch, CURLOPT_POSTFIELDS, "url=index%3Dbooks&field-keywords=PHP+MYSQL"); // add POST fields
        $result = curl_exec($ch); // run the whole process
        curl_close($ch);


        $str = json_decode($result);

        return $str;
    }

    public function getCurlResult($url = ''){

        $res = $this->getCurl($url);

        foreach ($res->data  as $value) {

            $this->item[$value->resortId] = [];

            if ($this->item[$value->resortId] != $value->resortId){

                $this->item[$value->resortId]['name'] = $value->hotelName;
                $this->item[$value->resortId]['price'] = number_format($value->price, 0, ',', ',');
                $this->item[$value->resortId]['img'] = $value->hotelPreview;
            }

            //echo $value->price."<br>";
            /*if ($value->country_id == 29) {
                echo $value->country_name."<br>";
            }*/
        }

        return $this->item;
    }

    /**
     * @param $param
     * Поиск туров
     */

    public function getSearch($param){

        $url = (isset($param['urlm'])) ?  'https://search.bankturov.ru' . $param['urlm'] . '?' : 'https://search.bankturov.ru';

        foreach ($param['param'] as $p => $value){
            if ($p === "resort_id" && !is_array($value)){
                $url .= $p.'='.$value.'&';
            }elseif ($p === "resort_id" && is_array($value )){
                foreach ($value as $p2 => $val){
                    $url .= 'resort_id%5B%5D='.$val.'&';
                }
            }else{
               // print_r($p); echo "-------"; print_r($value); echo "\n";
                if ($p === "mealType" && is_array($value )){
                    foreach ($value as $mealType)
                        $url .= 'mealType'.'%5B%5D='.$mealType.'&';
                }elseif ($p === "hotelStars" && is_array($value )){
                    foreach ($value as $hotelStars)
                        $url .= 'hotelStars'.'%5B%5D='.$hotelStars.'&';
                }else{

                    $url .= $p.'='.$value.'&';
                }

            }

        }



        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url); // set url to post to
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
        curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s
        //curl_setopt($ch, CURLOPT_POST, 1); // set POST method
        //curl_setopt($ch, CURLOPT_POSTFIELDS, "url=index%3Dbooks&field-keywords=PHP+MYSQL"); // add POST fields
        $result = curl_exec($ch); // run the whole process
        curl_close($ch);

        return $result;
    }

}
