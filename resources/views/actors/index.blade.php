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
            <td>{{$actor->name}}</td>
            <td>
                <div class="d-flex justify-content-end">
                    <div><a href="{{route('actor_edit', $actor->id)}}" class="btn btn-primary">Edit</a> </div>
                    <div><a href="{{route('actor_destroy', $actor->id)}}" class="btn btn-danger">Delete</a> </div>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
        <a href="{{route('actor_create')}}">
            <button class="btn btn-primary" type="button">
                Add Actor
            </button>
        </a>
    </div>
@endsection
