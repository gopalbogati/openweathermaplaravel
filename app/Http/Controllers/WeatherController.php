<?php

namespace App\Http\Controllers;

use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(){

         return view('home');
    }
    public function WeatherApi(request $request){
             $weather = new OpenWeather();
             $cities = $request->get('city');
             $result = [];
             foreach(explode(',',$cities) as $city){

                 $report = $weather->getCurrentWeatherByCityName($city, $request->get('unit'));
                 if ($report==false){
                     $errorResponse= ('Unable to fetch weather report for location '.$city);
                     return response()->json($errorResponse,400);
                  }
                 $row= array("country"=>$report["location"]["country"],
                   "name"=>$report["location"]["name"],
                   "temperature"=>$report["forecast"]["temp"],
                   "temperature_min"=>$report["forecast"]["temp_min"],
                    "temperature_max"=>$report["forecast"]["temp_max"]);
              array_push($result, $row);

             }

         return response()->json($result );

         }


}
