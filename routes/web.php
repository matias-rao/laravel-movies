<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('actors', ActorController::class); -> Evita poner todas las rutas  de abajo, magia de laravel (en este caso no sirve pq le puse los name a las rutas que no son por defecto)

//Actors
Route::get('/actors/{actor}/edit', [ActorController::class, 'edit'])->name('actor_edit');
Route::get('/actors/create', [ActorController::class, 'create'])->name('actor_create');
Route::get('/actors/{actor}', [ActorController::class, 'show'])->name('actor_show');
Route::delete('/actors/{actor}', [ActorController::class, 'destroy'])->name('actor_destroy');
Route::put('/actors/{actor}', [ActorController::class, 'update'])->name('actor_update');
Route::post('/actors', [ActorController::class, 'store'])->name('actor_store');
Route::get('/actors', [ActorController::class, 'index'])->name('actor_index');

///Genres
Route::get('/genres/{genre}/edit', [GenreController::class, 'edit'])->name('genre_edit');
Route::get('/genres/create', [GenreController::class, 'create'])->name('genre_create');
Route::delete('/genres/{genre}', [GenreController::class, 'destroy'])->name('genre_destroy');
Route::put('/genres/{genre}', [GenreController::class, 'update'])->name('genre_update');
Route::post('/genres', [GenreController::class, 'store'])->name('genre_store');
Route::get('/genres', [GenreController::class, 'index'])->name('genre_index');

///Directors
Route::get('/directors/{director}/edit', [DirectorController::class, 'edit'])->name('director_edit');
Route::get('/directors/create', [DirectorController::class, 'create'])->name('director_create');
Route::delete('/directors/{director}', [DirectorController::class, 'destroy'])->name('director_destroy');
Route::put('/directors/{director}', [DirectorController::class, 'update'])->name('director_update');
Route::post('/directors', [DirectorController::class, 'store'])->name('director_store');
Route::get('/directors', [DirectorController::class, 'index'])->name('director_index');


//Movies
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movie_edit');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movie_create');
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movie_destroy');
Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movie_update');
Route::post('/movies', [MovieController::class, 'store'])->name('movie_store');
Route::get('/movies', [MovieController::class, 'index'])->name('movie_index');


