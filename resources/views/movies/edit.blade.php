@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Movies</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('movie_update', $movie->id) }}">
                            @csrf
                            @method('PUT')

                            <x-field name="name" type="text"></x-field>
                            <x-field name="year" type="number"></x-field>

                            <div class="row mb-3">
                                <label for="director" class="col-md-4 col-form-label text-md-end">Director</label>

                                <div class="col-md-6">
                                    <select name="director_id">
                                        <option value=""> Selecciona un director</option>
                                        @foreach($directors as $director)
                                            <option value="{{$director->id}}"> {{$director->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="genres" class="col-md-4 col-form-label text-md-end">Genres</label>

                                <div class="col-md-6">
                                    <select name="genres[]" multiple="multiple">
                                        <option value=""> Selecciona un director</option>
                                        @foreach($genres as $genre)
                                            <option value="{{$genre->id}}"> {{$genre->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection