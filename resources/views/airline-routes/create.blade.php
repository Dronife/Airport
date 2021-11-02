@extends('abstracts.form', ['action' => route('airline-routes.store'), 'headline' => 'Create airline route'])

@section('inputs')

    <div class="form-group">
        @include('abstracts.selections.plain', ['objects' => $airlines, 'name' => 'airline_id' ] )
        <div class="row my-2">
            <div class="col">
                From
                @include('abstracts.selections.plain', ['objects' => $airports, 'name' => 'rise_air_station_id'] )
            </div>
            <div class="col">
                To
                @include('abstracts.selections.plain', ['objects' => $airports, 'name' => 'land_air_station_id' ])
            </div>
        </div>
        <input name="time" onkeyup="javascript:this.value=''"  value="{{old('time')}}" class="form-control my-2" type="date">
    </div>
@endsection
