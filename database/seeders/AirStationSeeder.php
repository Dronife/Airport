<?php

namespace Database\Seeders;

use App\Models\AirStation;
use Illuminate\Database\Seeder;

class AirStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = [
            [
                'title' => 'Vilnius Airport',
                'country_id' => 1, 
                'long' => 54.6427,
                'lat' => 25.2766,
            ],
            [
                'title' => 'Riga International Airport',
                'country_id' => 2, 
                'long' => 56.9227,
                'lat' => 23.9733,
            ],
            [
                'title' => 'Warsaw Chopin airpot',
                'country_id' => 3, 
                'long' => 52.1672,
                'lat' => 20.9679,
            ],
            [
                'title' => 'Talin airpot',
                'country_id' => 4, 
                'long' => 59.4146,
                'lat' =>  24.8335,
            ],
            [
                'title' => 'Helsinki airpot',
                'country_id' => 5, 
                'long' => 60.3183,
                'lat' =>  24.9497,
            ],
            [
                'title' => 'Stockholm Arlanda Airport',
                'country_id' => 6, 
                'long' => 59.6498,
                'lat' =>  17.9238,
            ],
            
        ];

        foreach($stations as $station)
            AirStation::create($station);
    }
}
