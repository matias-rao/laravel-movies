@props(['name', 'options', 'value' => null, 'multiple', 'label'])
{{--@dd($value)--}}
<div class="row mb-3">
    <label for="{{$name}}" class="col-md-4 col-form-label text-md-end">{{$label}}</label>

    <div class="col-md-6">
        <select name="{{$name}}" @if($multiple == "true") multiple @endif>
            <option value=""> Selecciona un {{$label}}</option>

            @foreach($options as $option)
                @if(is_int($value))
                    <option @if($value and $option->id === $value) selected @endif value="{{$option->id}}">{{$option->name}}</option>
                @else
                    <option @if($value and $value->contains($option->id)) selected @endif value="{{$option->id}}">{{$option->name}}</option>
                @endif
            @endforeach

        </select>
    </div>
</div>
