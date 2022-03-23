@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Director</th>
                <th scope="col">Year</th>
                <th scope="col">Genres</th>
            </tr>
            </thead>
            <tbody>
            @foreach($movies as $movie)
                <tr>
                    <th scope="row">{{$movie->id}}</th>
                    <td>{{$movie->name}}</td>
                    <td>{{$movie->director->name}}</td>
                    <td>{{$movie->year}}</td>
                    <td>
                        @foreach($movie->genres as $genre)
                            {{$genre->name}}
                        @endforeach
                    </td>

                    <td>
                        <div class="d-flex justify-content-end">
                            <div><a href="{{route('movie_edit', $movie->id)}}" class="btn btn-primary">Edit</a></div>
                            <div>
                                <form method="POST" action="{{route('movie_destroy', $movie->id)}}">
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
        <a href="{{route('movie_create')}}">
            <button class="btn btn-primary" type="button">
                Add Movie
            </button>
        </a>

    </div>
@endsection
