@extends('abstracts.form', ['action' => route('airlines.update', ['airline' => $airline->id]), 'headline' => 'Update airline', 'update' => 1])

@section('inputs')

    <div class="form-group">
        <input class="form-control my-2" value="{{ $airline->title }}" placeholder="Title" name="title" type="text"
            maxlength="255">
        @include('abstracts.selections.countries', ['countries' => $countries, 'selected' => $airline->country_id] )
    </div>
@endsection