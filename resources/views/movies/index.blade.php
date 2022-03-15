@extends('layouts.app')

@section('content')
    <div class="container">


    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
        <tr>
            <th scope="row">{{$movie->id}}</th>
            <td>{{$movie->name}}</td>
            <td>
                <div class="d-flex justify-content-end">
                    <div><a href="{{route('movie_edit', $movie->id)}}" class="btn btn-primary">Edit</a> </div>
                    <div><a href="{{route('movie_destroy', $movie->id)}}" class="btn btn-danger">Delete</a> </div>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
