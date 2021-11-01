<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirlineRoute extends Model
{
    use HasFactory;
    protected $fillable = [
        'rise_air_station_id',
        'land_air_station_id',
        'airline_id',
        'time'
    ];
}
