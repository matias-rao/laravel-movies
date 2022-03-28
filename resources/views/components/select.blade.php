@props(['name', 'data'])
{{--@dd($data)--}}
<div class="row mb-3">
    <label for="{{$name}}" class="col-md-4 col-form-label text-md-end">{{$name}}</label>

    <div class="col-md-6">
        <select name="{{$name}}" >
            <option value=""> Selecciona un {{$name}}</option>

            @foreach($data as $value)
                <option value="{{$value->id}}"> {{$value->name}}</option>
            @endforeach

        </select>
    </div>
</div>
