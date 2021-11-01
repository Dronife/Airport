@extends('layouts.app')

@section('content')
<div class="container col-5">
        @include('abstracts.messages')

        <h4>{{ $headline ?? '' }}</h4>
        <hr>
        @if (!isset($action))
            <div class="text-danger">
                No action
            </div>
        @endif
        <form action={{ $action ?? '' }} method="post">
            @csrf
            @isset($update)
                @method('put')
            @endisset

            @yield('inputs')
            <button class="btn btn-success float-right">Create</button>
        </form>
    </div>
@endsection
