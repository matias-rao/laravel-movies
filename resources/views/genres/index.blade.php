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
            @foreach($genres as $genre)
                <tr>
                    <th scope="row">{{$genre->id}}</th>
                    <td>{{$genre->name}}</td>

                    <td>
                        <div class="d-flex justify-content-end">
                            <div><a href="{{route('genre_edit', $genre->id)}}" class="btn btn-primary">Edit</a> </div>
                            <div><a href="{{route('genre_destroy', $genre->id)}}" class="btn btn-danger">Delete</a> </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
