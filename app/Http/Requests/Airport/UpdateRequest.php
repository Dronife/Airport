<?php

namespace App\Http\Requests\Airport;

use App\Rules\Airport\CheckCountryId;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => ['required','max:255', 'unique:air_stations,title,'.$this->route('airport')],
            'long' => ['numeric', 'min:-180', 'max:180'],
            'lat' => ['numeric', 'min:-90', 'max:90'],
            'country_id' => ['numeric', new CheckCountryId],
        ];
    }

    public function attributes()
    {
        return [
            'long' => 'Longitude',
            'lat' => 'Latitude',
        ];
    }
}
