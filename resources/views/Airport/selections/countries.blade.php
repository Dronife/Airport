<select name="country_id" class="form-control">
    @foreach ($countries as $country)
        <option value="{{ $country->id }}" @isset($selected) @if ($selected == $country->id) selected @endif @endisset>{{ $country->title }}
        </option>
    @endforeach
</select>
