<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AldoController;
use App\Http\Controllers\Controller2;

Route::get('/', function () {
    return "Hola mundo, sou Aldo";
});

Route::get('/controlador2/{nombre}',[Controller2::class, 'controlador2']);

Route::get('/controlador1',[AldoController::class, 'index']);

Route::get('/saludo/{nombre}', function($nombre){
    return "Saludos, $nombre";
});

