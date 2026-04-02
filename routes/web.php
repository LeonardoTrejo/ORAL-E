<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeonardoController;

// Ejercicio 1 
Route::get('/hola-leonardo', function () {
    return view('hola');
});

// Ejercicio 2 (Con parámetro)
Route::get('/saludo/{nombre}', function ($nombre) {
    return view('saludo', ['nombre' => $nombre]);
});

// Ejercicio 3 
Route::get('/controlador-leonardo', [LeonardoController::class, 'saludo']);

// Ejercicio 4 
Route::get('/controlador-saludo/{nombre}', [LeonardoController::class, 'saludoPersonalizado']);