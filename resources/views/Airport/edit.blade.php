@extends('abstracts.form', ['action' => route('airports.update',['airport' =>$airport->id]), 'headline' => 'Update
airport', 'update' =>1])

@section('inputs')

    <div class="form-group">
        <input class="form-control my-2" value="{{ $airport->title }}" placeholder="Title" name="title" type="text"
            maxlength="255">
        @include('abstracts.map', ['long' => $airport->long, 'lat' => $airport->lat])
        <div class="row my-2">
            <div class="col">
                <input class="form-control" value="{{ $airport->long }}" placeholder="Longitude" name="long"
                    type="number" step="0.0001" maxlength="255">
            </div>
            <div class="col">
                <input class="form-control" value="{{ $airport->lat }}" placeholder="Latitude" name="lat" type="number"
                    step="0.0001" maxlength="255">
            </div>
        </div>
        @include('airport.selections.countries', ['countries' => $countries, 'selected' => $airport->country_id] )
    </div>
@endsection
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/map/airports/create/getCoordinatesOnMouseClick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/map/airports/create/setMarkerCoordinatesOnInit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/map/airports/create/updateMapOnInputChange.js') }}"></script>
@endpush
