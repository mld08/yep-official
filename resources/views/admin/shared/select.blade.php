@php
    $label ??= ucfirst($name);
    $class ??= null;
    $name ??='';
    $value ??='';
@endphp

<div @class(['form-group', $class])>
    @if ($name == 'options')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}" multiple>
            @foreach ($options as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
    @elseif ($name == 'typevillas')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}" multiples>
            @foreach ($typevillas as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
    @elseif ($name == 'locataires')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}" multiples>
            @foreach ($locataires as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
    @elseif ($name == 'forfaits')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}" multiples>
            @foreach ($forfaits as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>

    @elseif ($name == 'villas')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}" multiplesss>
            @foreach ($villas as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
    @elseif ($name == 'reservations')
        <label for="{{ $name }}">{{$label}}</label>
        <select name="{{$name}}[]" id="{{$name}}" multiplesss>
            @foreach ($reservations as $k => $v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
    @endif


    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
