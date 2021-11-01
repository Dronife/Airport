<?php

namespace App\Models;

use AirlineRoutes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirStation extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'country_id',
        'long',
        'lat'
    ];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function riseRoutes(){
        return $this->hasMany(AirlineRoute::class, 'rise_air_station_id', 'id');
    }
    public function landRoutes(){
        return $this->hasMany(AirlineRoute::class, 'land_air_station_id', 'id');
    }

    public function allRountes(){
        return $this->riseRoutes->merge($this->landRoutes);
    }
}
