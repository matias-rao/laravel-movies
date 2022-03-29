@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show Actor</div>

                    <div class="card-body">
                        <h2>{{$actor->name}}</h2>
                        <img src="{{ url("$actor->picture")}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
