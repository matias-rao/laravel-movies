<div class="row mb-3">
    <label for="{{$attributes->get('name')}}" class="col-md-4 col-form-label text-md-end">{{$attributes->get('name')}}</label>

    <div class="col-md-6">
{{--        @dd($attributes->get('name'))--}}
        <input id="{{$attributes->get('name')}}" type="{{$attributes->get('type')}}" class="form-control @error($attributes->get('name')) is-invalid @enderror" name="{{$attributes->get('name')}}"
               value="{{ old($attributes->get('name')) }}" required autocomplete="name" autofocus>

        @error($attributes->get('name')))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
