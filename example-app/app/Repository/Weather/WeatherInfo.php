<?php

namespace App\Repository;
use Illuminate\Support\Facades\Http;
class WeatherInfo
{

    public static function getTempByCity($stringIn)
    {
        return Http::get("http://api.openweathermap.org/data/2.5/weather?q={$stringIn}&appid=3773b75f1fd374adf7a36a5b70f79b63")['main'];
    }



}
