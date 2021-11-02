<?php

namespace App\Http\Services;

use App\Models\Airline;
use Illuminate\Support\Facades\DB;

class AirlineService
{

    public function store($attributes)
    {
        DB::beginTransaction();
        try {
            Airline::create($attributes);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return back()->with('error', 'There was something wrong on server.');
        }
        return redirect()->route('airlines.index')->with('success', 'Airport was successfully deleted.');
    }

    
}
