@extends('abstracts.form', ['action' => route('countries.update',['country' => $country->id]), 'headline' => 'Update country', 'update' => 1])

@section('inputs')

    <div class="form-group">
        <input class="form-control my-2" value="{{ $country->ISO ?? '' }}" placeholder="ISO" name="ISO" type="text" maxlength="255">
        <input class="form-control my-2" value="{{ $country->title ?? '' }}" placeholder="Title" name="title" type="text" maxlength="255">
    </div>
@endsection
