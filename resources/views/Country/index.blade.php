@extends('abstracts.table')

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
            <td>{{$country->id}}</td>
            @foreach ($countries->first()->getFillable() as $key)
                <td>{{ $country->$key }}</td>
            @endforeach
            <td>
                <a href="javascript:void(0)" class="mx-2">Delete</a>
                <a href="javascript:void(0)" class="mx-2">Update</a>
            </td>
        </tr>
    @endforeach

@endsection
