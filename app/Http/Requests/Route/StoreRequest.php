<?php

namespace App\Http\Requests\Route;

use App\Rules\Route\CheckAirlineId;
use App\Rules\Route\CheckAirportId;
use App\Rules\Route\CheckTravelRoute;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'airline_id' => ['required', 'numeric', new CheckAirlineId],
            'rise_air_station_id' => ['required', 'numeric', new CheckTravelRoute($this->land_air_station_id), new CheckAirportId],
            'land_air_station_id' => ['required', 'numeric', new CheckAirportId],
            'time' => ['required','date', 'date_format:Y-m-d']
        ];
    }
}
