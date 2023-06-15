<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use Database\Seeders\MoviesSeeder;
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

Route::get('/',[HomeController::class, 'index']);

Route::resource('movies', MovieController::class);

Route::get('/genres',[GenresController::class, 'genres']);
Route::get('/genres/create', [Genrescontroller::class,'create']);
Route::post('/genres', [genresController::class, 'store']);
Route::delete('/genres/{genres}', [GenresController::class, 'destroy']);
Route::get('/genres/{genres}/edit', [GenresController::class, 'edit']);
Route::put('/genres/{genres}', [GenresController::class, 'update']);

Route::get('/review',[ReviewController::class, 'review']);
Route::get('/review/create', [Reviewcontroller::class,'create']);
Route::post('/review', [ReviewController::class, 'store']);
Route::delete('/review/{review}', [ReviewController::class, 'destroy']);
Route::get('/review/{review}/edit', [ReviewController::class, 'edit']);
Route::put('/review/{review}', [ReviewController::class, 'update']);

Route ::get('/user', function () {
    return view('user/user');
});



