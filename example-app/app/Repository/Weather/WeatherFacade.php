<?php

namespace App\Repository;

class WeatherFacade
{
    public static function getWeatherbyCity($city) {
        $temp = WeatherInfo::getTempByCity($city);
        return $temp;
    }

}
