@extends('abstracts.table', ['createUrl' => route('countries.create')])

@section('thead')
    <td>id</td>
    @foreach ($countries->first()->getFillable() as $key)
        <td>{{ $key }}</td>
    @endforeach
    <td>Action</td>
@endsection

@section('tbody')
    @foreach ($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            @foreach ($countries->first()->getFillable() as $key)
                <td>{{ $country->$key }}</td>
            @endforeach
            <td>
                <div class="row">
                <form action="{{ route('countries.destroy', $country->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger mx-2">Delete</button>
                </form>
                <a href="{{route('countries.edit', $country->id)}}" class="mx-2 btn btn-success">Edit</a>
                </div>
            </td>
        </tr>
    @endforeach

@endsection
