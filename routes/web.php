<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaludoController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/hola/{saludo?}', [SaludoController::class, 'index']);

Route::get('/posts', function () {
    return "Hola mundo; soy Rene Juarez";
});

Route::get('/posts/{post}/{category?}', function($post, $category = null) {
    if ($category){
        return "Que gusto verte {$post} {$category}";
    }
        return "Que gusto verte {$post}";
}); 