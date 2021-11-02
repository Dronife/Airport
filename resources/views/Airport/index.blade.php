@extends('abstracts.table', ['createUrl' => route('airports.create')])

@section('thead')

    <td>id</td>
    <td>Title</td>
    <td>Country</td>
    <td>Longitude</td>
    <td>Latitude</td>
    <td>Action</td>
@endsection

@section('tbody')
    @foreach ($airports as $airport)
        <tr>
            <td>{{ $airport->id }}</td>
            <td>{{ $airport->title }}</td>
            <td>{{ $airport->country }}</td>
            <td>{{ $airport->long }}</td>
            <td>{{ $airport->lat }}</td>
            <td>
                <div class="row">
                    <form action="{{ route('airports.destroy', $airport->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-2">Delete</button>
                    </form>
                    <a href="{{ route('airports.edit', $airport->id) }}" class="mx-2 btn btn-success">Edit</a>
                </div>
            </td>
        </tr>
    @endforeach
@endsection
