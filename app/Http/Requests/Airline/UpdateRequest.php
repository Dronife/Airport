<?php

namespace App\Http\Requests\Airline;

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
            'title' => ['required','max:255', 'unique:airlines,title,'.$this->route('airline')],
            'country_id' => ['numeric', new CheckCountryId],
        ];
    }
}