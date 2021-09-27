<?php

namespace Tests\Unit;
use Tests\TestCase;
use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Http\Request;

class WeatherTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_can_list_api()
    {
        $response = $this->getJson('/weather?city=kathmandu%2csydney%2cbrisbane&unit=metric');

        $response
            ->assertStatus(200);
    }

    }

