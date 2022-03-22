<div class="row mb-3">
    <label for="genres" class="col-md-4 col-form-label text-md-end">genres</label>

    <div class="col-md-6">
        <select name="genres[]" multiple="multiple">
            <option value=""> Selecciona un director</option>
            @foreach($genres as $genre)
                <option value="{{$genre->id}}"> {{$genre->genre}}</option>
            @endforeach
        </select>
    </div>
</div>
