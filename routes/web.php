<?php

use App\Models\Airline;
use App\Models\AirStation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/test', function () {
    dd(AirStation::find(1)->allRountes());
});

Auth::routes();
Route::resource('countries',App\Http\Controllers\CountryController::class);
Route::resource('airports',App\Http\Controllers\AirportController::class);
Route::resource('airlines',App\Http\Controllers\AirlineController::class);
Route::resource('airline-routes',App\Http\Controllers\AirlineRouteController::class);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
