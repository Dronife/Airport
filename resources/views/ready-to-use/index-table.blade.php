@extends('abstracts.table', ['createUrl' => route($route.'.create')])

@section('thead')
    
    <td>id</td>
    @foreach ($objects->first()->getFillable() as $key)
        <td>{{ $key }}</td>
    @endforeach
    <td>Action</td>
@endsection

@section('tbody')
    @foreach ($objects as $object)
        <tr>
            <td>{{ $object->id }}</td>
            @foreach ($objects->first()->getFillable() as $key)
                <td>{{ $object->$key }}</td>
            @endforeach
            <td>
                <div class="row">
                <form action="{{ route($route.'.destroy', $object->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger mx-2">Delete</button>
                </form>
                <a href="{{route($route.'.edit', $object->id)}}" class="mx-2 btn btn-success">Edit</a>
                </div>
            </td>
        </tr>
    @endforeach

@endsection
