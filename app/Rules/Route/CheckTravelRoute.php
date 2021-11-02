<?php

namespace App\Rules\Route;

use Illuminate\Contracts\Validation\Rule;

class CheckTravelRoute implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($airport)
    {
        $this->airport = $airport;
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
        return $value != $this->airport;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Airports can not be same.';
    }
}
