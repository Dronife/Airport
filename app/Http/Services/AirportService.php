<?php

namespace App\Http\Services;

use App\Models\AirStation;
use Illuminate\Support\Facades\DB;

class AirportService
{
    
    public function store($attributes)
    {
        DB::beginTransaction();
        try {
            AirStation::create($attributes);
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
            AirStation::destroy($id);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return false;
        }
        return true;
    }
}
