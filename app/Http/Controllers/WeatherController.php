<?php

namespace App\Http\Controllers;

use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(request $request){
        $weather = new OpenWeather();
        $current = $weather->getCurrentWeatherByPostal('02111');
        echo '<pre>';
        print_r($current);
        echo '</pre>';
        //return view('home', compact('current'));
        // return view('home');
    }

}
