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

        } catch (\Throwable $e) {
            DB::rollBack();
            return false;
        }
        return true;
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            Country::destroy($id);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return false;
        }
        return true;
    }

    public function update($id, $attributes)
    {
        DB::beginTransaction();
        try {
            Country::find($id)->update($attributes);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return false;
        }
        return true;
    }
}
