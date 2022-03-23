@extends('layouts.app')

@section('content')
    <div class="container">


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Movies</th>
            </tr>
            </thead>
            <tbody>
            @foreach($directors as $director)
                <tr>
                    <th scope="row">{{$director->id}}</th>
                    <td>{{$director->name}}</td>
                    <td>
                        @foreach($director->movies as $movie)
                            {{$movie->name}}
                        @endforeach
                    </td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <div><a href="{{route('director_edit', $director->id)}}" class="btn btn-primary">Edit</a>
                            </div>
                            <div>
                                <form method="POST" action="{{route('director_destroy', $director->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('director_create')}}">
            <button class="btn btn-primary" type="button">
                Add Director
            </button>
        </a>
    </div>
@endsection
