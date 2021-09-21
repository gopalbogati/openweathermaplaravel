<?php

namespace App\Http\Controllers;

use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(request $request){

         return view('home');
    }
    public function WeatherApi(request $request){
        $weather = new OpenWeather();

             $cities = $request->get('city');
             $result = [];
             foreach(explode(',',$cities) as $city){
               $report = $weather->getCurrentWeatherByCityName($city, $request->get('unit'));
                array_push($result, $report);

             }

         return response()->json($result
            );

         }


}
