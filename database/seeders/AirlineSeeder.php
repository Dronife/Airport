<?php

namespace Database\Seeders;

use App\Models\Airline;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airlines = [
            ['title' => 'Lithuania airlines', 'country_id' => 1],
            ['title' => 'Latvia airlines', 'country_id' => 2],
            ['title' => 'Finland airlines', 'country_id' => 5],
            ['title' => 'Germany airlines', 'country_id' => 8],
            ['title' => 'France airlines', 'country_id' => 9],
        ];

        foreach($airlines as $airline)
            Airline::create($airline);
    }
}
