<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModelTeamsController;
use App\Http\Controllers\ModelGamesController;

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


Route::get('/', [HomeController::class, 'index'])->name('home'); 

Route::resource('teams', ModelTeamsController::class);
Route::resource('games', ModelGamesController::class);



/*
Route::get('/teams', function () {
    return view('teams');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/games', function () {
    return view('games');
});
*/