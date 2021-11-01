<?php

namespace App\Http\Services;

use App\Models\Country;
use Illuminate\Support\Facades\DB;

class CountryService
{
    public function store($attributes)
    {
        DB::beginTransaction();
        try {
            Country::create($attributes);
            DB::commit();

        } catch (\Throwable$e) {
            DB::rollBack();
            return false;
        }
        return true;
    }
}
