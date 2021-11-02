@extends('abstracts.form', ['action' => route('countries.store'), 'headline' => 'Create airport'])

@section('inputs')

    <div class="form-group">
        <input class="form-control my-2" value="{{ old('title') }}" placeholder="Title" name="title" type="text"
            maxlength="255">
       @include('abstracts.map')
        <div class="row my-2">
            <div class="col">
                <input class="form-control" value="{{ old('long') }}" placeholder="Longitude" name="long" type="number"
                    step="0.0001" maxlength="255">
            </div>
            <div class="col">
                <input class="form-control" value="{{ old('lat') }}" placeholder="Latitude" name="lat" type="number"
                    step="0.0001" maxlength="255">
            </div>
        </div>
        @include('airport.selections.countries', ['countries' => $countries] )
    </div>
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/map/airports/create/getCoordinatesOnMouseClick.js')}}"></script>
<script type="text/javascript" src="{{asset('js/map/airports/create/updateMapOnInputChange.js')}}"></script>
@endpush


