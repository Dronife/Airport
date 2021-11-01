@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-3 float-right">
            <a class="btn btn-primary" href="javascript:void(0)">Create new</a>
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
