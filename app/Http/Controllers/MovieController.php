<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Director;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directors = Director::all();
        $genres = Genre::all();

        return view('movies.create', compact('directors', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $data = $request->validated();

        $movie = Movie::create($data);
        $movie->genres()->attach($request['genres']);

        return redirect()->route('movie_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $directors = Director::all();
        $genres = Genre::all();
        return view('movies.edit', compact('movie', 'directors', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $data = $request->validated();

        $movie->genres()->detach();
        $movie->genres()->attach($request['genres']);
        $movie->update($data);

        return redirect()->route('movie_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movie_index');
    }
}
