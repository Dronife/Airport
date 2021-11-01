<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'title' => 'Lithuania',
                'ISO' =>   'LT/LTU'    
            ],
            [
                'title' => 'Latvia',
                'ISO' =>   'LV/LVA'    
            ],
            [
                'title' => 'Poland',
                'ISO' =>   'PL/POL'    
            ],
            [
                'title' => 'Estonia',
                'ISO' =>   'EE/EST'    
            ],
            [
                'title' => 'Finland',
                'ISO' =>   'FI/FIN'    
            ],
            [
                'title' => 'Sweden',
                'ISO' =>   'SE/SWE'    
            ],
            [
                'title' => 'Norway',
                'ISO' =>   'NO/NOR'    
            ],
            [
                'title' => 'Germany',
                'ISO' =>   'DE/DEU'    
            ],
            [
                'title' => 'France',
                'ISO' =>   'FR/FRA'    
            ],
        ];

        foreach($countries as $country)
            Country::create($country);
    }
}
