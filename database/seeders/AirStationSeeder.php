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
                'long' => 25.2766,
                'lat' => 54.6427,
            ],
            [
                'title' => 'Riga International Airport',
                'country_id' => 2, 
                'long' => 23.9733,
                'lat' => 56.9227,
            ],
            [
                'title' => 'Warsaw Chopin airpot',
                'country_id' => 3, 
                'long' => 20.9679,
                'lat' => 52.1672,
            ],
            [
                'title' => 'Talin airpot',
                'country_id' => 4, 
                'long' => 24.8335,
                'lat' =>  59.4146,
            ],
            [
                'title' => 'Helsinki airpot',
                'country_id' => 5, 
                'long' => 24.9497,
                'lat' =>  60.3183,
            ],
            [
                'title' => 'Stockholm Arlanda Airport',
                'country_id' => 6, 
                'long' => 17.9238,
                'lat' => 59.6498 ,
            ],
            
        ];

        foreach($stations as $station)
            AirStation::create($station);
    }
}
