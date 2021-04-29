<?php

namespace App\Repository;
use Illuminate\Support\Facades\Http;

class WeatherInfo
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.weather.api_key');
    }

    public function getTempByCity($stringIn)
    {

        return Http::get("http://api.openweathermap.org/data/2.5/weather?q={$stringIn}&appid={$this->apiKey}")['main'];
    }


}
