<?php

namespace App\LocalPack;

class Forecast
{
    const API_ENDPOINT = 'https://api.darksky.net/forecast/';
    private $api_key;

    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

    private function request($latitude, $longitude, $time = null, $options = array())
    {
        $request_url = self::API_ENDPOINT
            . $this->api_key
            . '/'
            . $latitude
            . ','
            . $longitude
            . ((is_null($time)) ? '' : ','. $time);

        if (!empty($options)) {
            $request_url .= '?'. http_build_query($options);
        }else{
            $request_url .= '?'. http_build_query([
                    'units' => 'si',
                    'exclude' => 'flags',
                    'lang' => 'ru'
                ]);
        }
        
        $response = json_decode(file_get_contents($request_url));
        $response->headers = $http_response_header;
        return $response;
    }

    public function get($latitude, $longitude, $time = null, $options = array())
    {
        return $this->request($latitude, $longitude, $time, $options);
    }

    public function getIcon($icon)
    {
        switch ($icon){
            case "clear-day":
                return "clear-day";
            case "clear-night":
            return "clear-night";
            case "rain":
                return "rain";
            case "snow":
                return "snow";
            case "sleet":
            return "sleet";
            case "wind":
                return "wind";
            case "fog":
                return "fog";
            case "cloudy":
                return "cloudy";
            case "partly-cloudy-day":
                return "partly-cloudy-night";
            case "partly-cloudy-day":
                return "partly-cloudy-night";
            case "hail":
                return "hail";
            case "thunderstorm":
                return "thunderstorm";
            case "tornado":
                return "tornado";
            default:
                return "default";

        }
    }

    public function getMydata($latitude, $longitude){
        $data = [];
        $weather =  $this->request($latitude, $longitude);

        $data['templ']      = (int) ceil($weather->currently->temperature);
        $data['summary']    = $weather->currently->summary;
        $data['icon']       = $this->getIcon($weather->currently->icon);

        return $data;
    }
}
