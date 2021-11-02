@extends('abstracts.table', ['createUrl' => route('airlines.create')])

@section('thead')

    <td>id</td>
    <td>Title</td>
    <td>Country</td>
    <td>Action</td>
@endsection

@section('tbody')
    @foreach ($airlines as $airline)
        <tr>
            <td>{{ $airline->id }}</td>
            <td>{{ $airline->title }}</td>
            <td>{{ $airline->country }}</td>
            <td>
                <div class="row">
                    <form action="{{ route('airlines.destroy', $airline->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-2">Delete</button>
                    </form>
                    <a href="{{ route('airlines.edit', $airline->id) }}" class="mx-2 btn btn-success">Edit</a>
                </div>
            </td>
        </tr>
    @endforeach
@endsection