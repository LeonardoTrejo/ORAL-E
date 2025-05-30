<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return "Hola mundo soy Omar";
});

Route::get('/post/{nombre}', [PostController::class, 'show']);

Route::get('/HomeController',[HomeController::class, 'index']);

Route::get('/saludo/{nombre}', function($nombre){
    return "Un gusto verte, $nombre";
});