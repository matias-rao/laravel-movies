@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Director</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('director_update', $director->id) }}">
                            @csrf
                            @method('PUT')

                            <x-field name="name" type="text" value="{{$director->name}}"></x-field>

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
