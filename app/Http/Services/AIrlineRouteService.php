<?php

namespace App\Http\Services;

use App\Models\AirlineRoute;
use Illuminate\Support\Facades\DB;

class AIrlineRouteService extends AbstractService
{

    public function __construct()
    {
        parent::__construct('airlines');
    }
    public function store($attributes)
    {
        DB::beginTransaction();
        try {
            AirlineRoute::create($attributes);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Airline route was successfully created.');
    }

}
