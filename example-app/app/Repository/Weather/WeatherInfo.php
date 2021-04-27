<?php

namespace App\Repository;
use Illuminate\Support\Facades\Http;

class WeatherInfo
{

    public static function getTempByCity($stringIn)
    {
        $api_key = config('services.weather.api_key');
        return Http::get("http://api.openweathermap.org/data/2.5/weather?q={$stringIn}&appid={$api_key}")['main'];
    }


}
