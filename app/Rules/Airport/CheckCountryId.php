<?php

namespace App\Rules\Airport;

use App\Models\Country;
use Illuminate\Contracts\Validation\Rule;

class CheckCountryId implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Country::find($value) != null;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Country does not exists';
    }
}
