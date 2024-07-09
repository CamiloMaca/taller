<?php

use App\Http\Controllers\GolController;
use App\Models\Jugador;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cruds');
});

Route::resource('jugador', JugadorController::class);
Route::resource('gol',GolController::class);
