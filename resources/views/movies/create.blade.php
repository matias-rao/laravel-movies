@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Movies</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('movie_store') }}" novalidate>
                            @csrf

                            <x-field name="name" type="text" value=""></x-field>
                            <x-field name="year" type="number" value=""></x-field>

                            <x-select label="Director" :options=$directors name="director_id" multiple="false" value=""></x-select>
                            <x-select label="Genero" :options=$genres name="genres[]" multiple="true" value=""></x-select>

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
