<?php

namespace App\Http\Services;

use App\Models\Airline;
use Illuminate\Support\Facades\DB;

class AirlineService extends AbstractService
{

    public function __construct()
    {
        parent::__construct('airlines');
    }
    public function store($attributes)
    {
        DB::beginTransaction();
        try {
            Airline::create($attributes);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Airline was successfully created.');
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            Airline::destroy($id);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Airline was successfully deleted.');
    }

    public function update($id, $attributes)
    {
        DB::beginTransaction();
        try {
            Airline::find($id)->update($attributes);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Airline was successfully updated.');
    }

    
}
