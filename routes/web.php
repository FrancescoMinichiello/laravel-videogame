<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VideogameController;
use App\Models\Videogame;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/videogames', [VideogameController::class, 'index'])->name('videogames.index');
Route::get("/videogames/{id}", [VideogameController::class, "show"])->name("videogames.show");
Route::get('/create', [App\Http\Controllers\VideogameController::class, 'create'])->name('create');
