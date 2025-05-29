<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index'] );

Route::get('/posts', function(){
    return "Hola mundo, soy Raúl Omar :D";
});

Route::get('/posts/{post}/{category?}', function($post, $category = null){
    if ($category) {
        return "Que gusto verte {$post} {$category}";
    }
        return "Que gusto verte {$post}";
});

Route::get('/saludar/{saludo?}', [PostController::class, 'index']);
//Get
//Post
//Put
//Patch
//Delete