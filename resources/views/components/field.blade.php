@props(['name', 'type', 'value' => ""])
{{--@dd($value)--}}
<div class="row mb-3">
    <label for="{{$name}}"
           class="col-md-4 col-form-label text-md-end">{{$name}}</label>

    <div class="col-md-6">
        <input id="{{$name}}" type="{{$type}}"
               class="form-control @error($name) is-invalid @enderror"
               name="{{$name}}"
               value="{{old('value') ?? $value}}"  autocomplete="name" autofocus>

        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
