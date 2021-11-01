@extends('abstracts.form', ['action' => route('countries.store'), 'headline' => 'Create country'])

@section('inputs')

    <div class="form-group">
        <input class="form-control my-2" value="{{ old('ISO') }}" placeholder="ISO" name="ISO" type="text" maxlength="255">
        <input class="form-control my-2" value="{{ old('title') }}" placeholder="Title" name="title" type="text" maxlength="255">
    </div>
   

@endsection
