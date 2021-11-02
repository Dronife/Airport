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

    public function getRiseAirStationAttribute()
    {
        return AirStation::find($this->rise_air_station_id)->title;
    }
    public function getLandAirStationAttribute()
    {
        return AirStation::find($this->land_air_station_id)->title;
    }

    public function getAirlineAttribute(){
        return Airline::find($this->airline_id)->title;
    }

}
