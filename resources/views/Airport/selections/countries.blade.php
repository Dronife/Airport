<select name="country_id" class="form-control">
    @foreach($countries as $country)
    <option value="{{$country->id}}">{{$country->title}}</option>
    @endforeach
</select>