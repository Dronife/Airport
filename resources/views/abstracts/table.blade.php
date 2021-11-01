@extends('layouts.app')

@section('content')
    <div class="container">
        @include('abstracts.messages')
        <div class="py-3 float-right">
            <a class="btn btn-primary" href="{{ $createUrl ?? 'javascript:void(0)' }}">Create new</a>
        </div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    @yield('thead')
                </tr>
            </thead>
            <tbody>
                @yield('tbody')
            </tbody>
        </table>
    </div>
@endsection
