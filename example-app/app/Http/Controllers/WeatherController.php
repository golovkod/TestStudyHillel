<?php

namespace App\Http\Controllers;

use App\Repository\WeatherFacade;
use Illuminate\Http\Request;


class WeatherController extends Controller
{
   public function index()
   {
    $weatherByCity = WeatherFacade::getWeatherByCity('Kyiv');
    dd($weatherByCity);
   }
}
