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
        @foreach($directors as $director)
        <tr>
            <th scope="row">{{$director->id}}</th>
            <td>{{$director->name}}</td>
            <td>{{$director->movies}}</td>
            <td>
                <div class="d-flex justify-content-end">
                    <div><a href="{{route('director_edit', $director->id)}}" class="btn btn-primary">Edit</a> </div>
                    <div><a href="{{route('director_destroy', $director->id)}}" class="btn btn-danger">Delete</a> </div>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
