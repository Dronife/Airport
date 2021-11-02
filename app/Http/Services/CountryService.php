<?php

namespace App\Http\Services;

use App\Models\Country;
use Illuminate\Support\Facades\DB;

class CountryService extends AbstractService
{

    public function __construct()
    {
        parent::__construct('countries');
    }

    public function store($attributes)
    {
        DB::beginTransaction();
        try {
            Country::create($attributes);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Country was successfully created.');
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            Country::destroy($id);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Country was successfully deleted.');
    }

    public function update($id, $attributes)
    {
        DB::beginTransaction();
        try {
            Country::find($id)->update($attributes);
            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
            return $this->returnWithErrorMessage();
        }
        return $this->returnWithSuccessMessage('Country was successfully updated.');
    }
}
