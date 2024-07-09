<?php

use App\Models\Jugador;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cruds');
});

Route::resource('jugador', JugadorController::class);
/*Route::controller(JugadorController::class)->group(function(){
    Route::get('/jugador/create', 'create')->name('jugador.create');
    Route::post('/jugador', 'store')->name('jugador.store');
    Route::get('/jugador/lista','index')->name('jugador.index');
    Route::get('/jugador/{jugador}','show')->name('jugador.show');
});*/