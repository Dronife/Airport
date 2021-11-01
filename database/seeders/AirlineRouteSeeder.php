<?php

namespace Database\Seeders;

use App\Models\AirlineRoute;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AirlineRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = [
            ['rise_air_station_id' => 1, 'land_air_station_id' => 3, 'airline_id' => 3, 'time' => Carbon::parse('2021-11-05')],
            ['rise_air_station_id' => 3, 'land_air_station_id' => 1, 'airline_id' => 4, 'time' => Carbon::parse('2021-11-08')],
            ['rise_air_station_id' => 3, 'land_air_station_id' => 2, 'airline_id' => 3, 'time' => Carbon::parse('2021-11-06')],
            ['rise_air_station_id' => 2, 'land_air_station_id' => 1, 'airline_id' => 3, 'time' => Carbon::parse('2021-11-07')],
            ['rise_air_station_id' => 5, 'land_air_station_id' => 5, 'airline_id' => 1, 'time' => Carbon::parse('2021-11-03')],
            ['rise_air_station_id' => 6, 'land_air_station_id' => 2, 'airline_id' => 3, 'time' => Carbon::parse('2021-11-09')],
        ];

        foreach($routes as $route)
            AirlineRoute::create($route);
    }
}
