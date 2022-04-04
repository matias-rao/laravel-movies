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

//TODO: En web.php economizar código, no repetir middlewares, tratar de usar los names por default

Route::middleware(['auth'])
    ->group(function () {
        //-> Resource evita poner todas las rutas, magia de laravel
        Route::resource('actors', ActorController::class);
        Route::resource('genres', GenreController::class);
        Route::resource('directors', DirectorController::class);
        Route::resource('movies', MovieController::class);
    });

