<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'country_id',
    ];

    public function getCountryAttribute(){
        return Country::find($this->country_id)->title;
    }
    
    public function country(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
