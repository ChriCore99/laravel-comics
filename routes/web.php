<?php

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
    return view('home');
});

Route::get('/comics', function () {
    // creo la variabile "comics" che importa il mio array
    $comics = config('comics');
    // dico di restituire nella schermata comics l'array "comics"
    return view('comics', compact('comics'));
})->name('comics');
