@props(['name', 'data', 'valuee', 'multiple', 'label'])
{{--@dd($data->name)--}}
<div class="row mb-3">
    <label for="{{$name}}" class="col-md-4 col-form-label text-md-end">{{$label}}</label>

    <div class="col-md-6">
        <select name="{{$name}}" @if($multiple == "true") multiple @endif>
            <option value=""> Selecciona un {{$label}}</option>

            @foreach($data as $valores)
                @php($es_string_y_coincide = is_string($valuee) and $valores->id === $valuee)
                <option @if($es_string_y_coincide) selected @endif value="{{$valores->id}}"> {{$valores->name}}</option>
            @endforeach

        </select>
    </div>
</div>
