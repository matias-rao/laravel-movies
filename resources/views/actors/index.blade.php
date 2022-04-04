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
        @foreach($actors as $actor)
        <tr>
            <th scope="row">{{$actor->id}}</th>
            <td><a href="{{route('actors.show', $actor->id)}}">{{$actor->name}}</a></td>
            <td>
                <div class="d-flex justify-content-end">
                    <div><a href="{{route('actors.edit', $actor->id)}}" class="btn btn-primary">Edit</a> </div>
                    <div>
                        <form method="POST" action="{{route('actors.destroy', $actor->id)}}">
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
        <a href="{{route('actors.create')}}">
            <button class="btn btn-primary" type="button">
                Add Actor
            </button>
        </a>
    </div>
@endsection
