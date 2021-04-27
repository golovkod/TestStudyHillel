<?php

namespace App\Repository;

class WeatherFacade
{
    public static function getWeatherByCity($city)
    {
        $temp = (new WeatherInfo)->getTempByCity($city);
        return $temp;
    }

}
