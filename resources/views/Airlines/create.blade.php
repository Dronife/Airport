@extends('abstracts.form', ['action' => route('airlines.store'), 'headline' => 'Create airline'])

@section('inputs')

    <div class="form-group">
        <input class="form-control my-2" value="{{ old('title') }}" placeholder="Title" name="title" type="text"
            maxlength="255">
        @include('abstracts.selections.countries', ['countries' => $countries] )
    </div>
@endsection