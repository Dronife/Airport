<?php

namespace App\Http\Controllers;

use App\Http\Requests\Airport\StoreRequest;
use App\Http\Requests\Airport\UpdateRequest;
use App\Http\Services\AirportService;
use App\Models\AirStation;
use App\Models\Country;
use Illuminate\Http\Request;

class AirportController extends Controller
{

    public function __construct()
    {
        $this->airportService = new AirportService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Airport.index', ['airports' => AirStation::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Airport.create', ['countries' => Country::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        if (!$this->airportService->store($request->validated())) {
            return back()->with('error', 'There was something wrong on server.');
        }

        return redirect()->route('airports.index')->with('success', 'Airport was successfully created.');
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
        return view('Airport.edit', ['countries' => Country::all(), 'airport' => AirStation::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (!$this->airportService->destroy($id)) {
            return back()->with('error', 'There was something wrong on server.');
        }

        return redirect()->route('airports.index')->with('success', 'Airport was successfully deleted.');
    }
}
