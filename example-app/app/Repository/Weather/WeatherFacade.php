<?php

namespace App\Repository;

class WeatherFacade
{
    public static function getWeatherByCity($city) {
        $temp = WeatherInfo::getTempByCity($city);
        return $temp;
    }

}
