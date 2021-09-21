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
               // $row= array("city"=>"city", "temp"=>"12");
               $row= array("country"=>$report["location"]["country"],
               "name"=>$report["location"]["name"],
               "temperature"=>$report["forecast"]["temp"],
               "temperature_min"=>$report["forecast"]["temp_min"],
               "temperature_max"=>$report["forecast"]["temp_max"]);
               array_push($result, $row);

             }

         return response()->json($result
            );

         }


}
