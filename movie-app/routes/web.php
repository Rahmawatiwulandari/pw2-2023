<?php

use App\Http\Controllers\MovieController;
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

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/genres', function () {
    return view('genres/genres');
});

Route::get('/review', function () {
    return view('review/review');
});

Route::get('/user', function () {
    return view('user/user');
});
