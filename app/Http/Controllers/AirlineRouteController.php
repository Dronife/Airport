<?php

namespace App\Http\Controllers;

use App\Http\Requests\Route\StoreRequest;
use App\Http\Services\AIrlineRouteService;
use App\Models\Airline;
use App\Models\AirlineRoute;
use App\Models\AirStation;
use Illuminate\Http\Request;

class AirlineRouteController extends Controller
{

    public function __construct()
    {
        $this->airlineRouteService = new AIrlineRouteService();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('airline-routes.index', ['routes' => AirlineRoute::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airline-routes.create',
        [
            'airports' => AirStation::all(),
            'airlines' => Airline::all(),
        ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        return $this->airlineRouteService->store($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('airline-routes.edit', 
        [
            'route' => AirlineRoute::find($id),
            'airlines' => Airline::all(),
            'airports' => AirStation::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        return $this->airlineRouteService->update($id, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
