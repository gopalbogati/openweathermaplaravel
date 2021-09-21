@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="container">
              <div class="row">
                  <div class="col">
                      <div class="weather-card one">
                          <div class="top">
                              <div class="wrapper">
                                  <h5 class="nameOfDay"></h5>
                                  <h5 class="nameOfDay">{{$current_date->format('l')}}</h5>
                                  <h5 class="currentDate">{{$current_date->format('jS \\of F Y')}}</h5>
                                  <h3 class="location">{{$current_weather[0]->name . ', ' . $current_weather[0]->sys->country}}</h3>
                                  <p class="temp">
                                      <span class="temp-value">{{number_format($current_weather[0]->main->temp, 0)}}</span>
                                      <span class="deg">0</span>
                                      <a href=""><span class="temp-type">C</span></a>
                                  </p>
                                  <h1 class="heading">
                                      {{$current_weather[0]->weather[0]->main}}
                                      <img src="http://openweathermap.org/img/w/{{$current_weather[0]->weather[0]->icon}}.png" alt="">
                                  </h1>

                                <div class="col-md-12">
                                  <div class="text-center">
                                        <button class="btn btn-secondary" disabled>Last update today at {{$current_weather[1]}}</button>
                                  </div>
                                </div>

                              </div>
                          </div>
                          <div class="bottom">
                              <div class="wrapper">
                                  <ul class="forecast">

                                      <li class="active">
                                          <span class="date">{{$current_date->addDay()->format('l')}}</span>
                                          <span class="lnr condition">
                                          <img src="http://openweathermap.org/img/w/{{$forecast_weather->list[5]->weather[0]->icon}}.png" alt="">
                                              <span class="temp">{{number_format($forecast_weather->list[5]->main->temp, 0)}}<span class="deg">0</span><span class="temp-type">C</span></span>
                                          </span>
                                      </li>
                                      <li>
                                          <span class="date">{{$current_date->addDay()->format('l')}}</span>
                                          <span class="lnr condition">
                                          <img src="http://openweathermap.org/img/w/{{$forecast_weather->list[13]->weather[0]->icon}}.png" alt="">
                                              <span class="temp">{{number_format($forecast_weather->list[13]->main->temp, 0)}}<span class="deg">0</span><span class="temp-type">C</span></span>
                                          </span>
                                      </li>
                                      <li>
                                          <span class="date">{{$current_date->addDay()->format('l')}}</span>
                                          <span class="lnr condition">
                                          <img src="http://openweathermap.org/img/w/{{$forecast_weather->list[21]->weather[0]->icon}}.png" alt="">
                                              <span class="temp">{{number_format($forecast_weather->list[21]->main->temp, 0)}}<span class="deg">0</span><span class="temp-type">C</span></span>
                                          </span>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
