<?php

namespace App\Http\Services;

use App\Models\AirStation;
use Illuminate\Support\Facades\DB;

class AirportService extends AbstractService
{

    public function __construct()
    {
        parent::__construct('airports');
    }
    
    public function store($attributes)
    {
        DB::beginTransaction();
        try {
            AirStation::create($attributes);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Airport was successfully created.');
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            AirStation::destroy($id);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Airport was successfully deleted.');
    }

    public function update($id, $attributes)
    {
        DB::beginTransaction();
        try {
            AirStation::find($id)->update($attributes);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Airport was successfully updated.');
    }
}
