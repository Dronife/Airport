@extends('abstracts.table', ['createUrl' => route('airline-routes.create')])

@section('thead')

    <td>id</td>
    <td>Flies from</td>
    <td>Lands to</td>
    <td>Airline</td>
    <td>Time</td>
    <td>Action</td>
@endsection

@section('tbody')
    @foreach ($routes as $route)
        <tr>
            <td>{{ $route->id }}</td>
            <td>{{ $route->rise_air_station }}</td>
            <td>{{ $route->land_air_station }}</td>
            <td>{{ $route->airline }}</td>
            <td>{{ $route->time }}</td>
            <td>
                <div class="row">
                    <form action="{{ route('airline-routes.destroy', $route->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-2">Delete</button>
                    </form>
                    <a href="{{ route('airline-routes.edit', $route->id) }}" class="mx-2 btn btn-success">Edit</a>
                </div>
            </td>
        </tr>
    @endforeach
@endsection