<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/movies',[MovieController::class, 'index']);

Route::get('/genres',[GenresController::class, 'genres']);
Route::get('/genres/create', [Genrescontroller::class,'create']);
Route::post('/genres', [genresController::class, 'store']);
Route::delete('/genres/{genres}', [GenresController::class, 'destroy']);

Route::get('/review',[ReviewController::class, 'review']);
Route::get('/review/create', [Reviewcontroller::class,'create']);
Route::post('/review', [ReviewController::class, 'store']);
Route::delete('/review/{review}', [ReviewController::class, 'destroy']);

Route ::get('/user', function () {
    return view('user/user');
});

Route::get('/movies/create', [moviecontroller::class,'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);