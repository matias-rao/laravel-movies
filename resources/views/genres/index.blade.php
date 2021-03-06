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
                            <div><a href="{{route('genres.edit', $genre->id)}}" class="btn btn-primary">Edit</a> </div>
                            <div>
                                <form method="POST" action="{{route('genres.destroy', $genre->id)}}">
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
        <a href="{{route('genres.create')}}">
            <button class="btn btn-primary" type="button">
                Add Genre
            </button>
        </a>
    </div>
@endsection
