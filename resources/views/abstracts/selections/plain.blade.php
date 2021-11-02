<select name="{{ $name }}" class="form-control" @isset($readonly) readonly @endisset>
    @foreach ($objects as $object)
        <option value="{{ $object->id }}" 
            @if( old($name) == $object->id) selected @endif
            @isset($selected)
            @if ($selected == $object->id) selected @endif
             @endisset>
            {{ $object->title }}
        </option>
    @endforeach
</select>
