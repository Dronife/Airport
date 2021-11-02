@extends('abstracts.form', ['action' => route('airline-routes.update',['airline_route' => $route->id]),
 'headline' => 'Update airline route', 'update' => 1])

@section('inputs')

    <div class="form-group">
        @include('abstracts.selections.plain', ['objects' => $airlines, 'name' => 'airline_id' , 'selected' => $route->airline_id ] )
        <div class="row my-2">
            <div class="col">
                From
                @include('abstracts.selections.plain', ['objects' => $airports, 'name' => 'rise_air_station_id', 'selected' => $route->rise_air_station_id] )
            </div>
            <div class="col">
                To
                @include('abstracts.selections.plain', ['objects' => $airports, 'name' => 'land_air_station_id', 'selected' => $route->land_air_station_id ])
            </div>
        </div>
        <input name="time" onkeyup="javascript:this.value=''"  value="{{$route->time}}" class="form-control my-2" type="date">
    </div>
@endsection
