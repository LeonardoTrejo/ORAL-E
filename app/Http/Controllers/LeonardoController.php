<?php

namespace App\Http\Controllers;

class LeonardoController extends Controller
{
    // Ejercicio 3
    public function saludo()
    {
        return view('controlador'); 
    }

    // Ejercicio 4
    public function saludoPersonalizado($nombre)
    {
        return view('controlador_saludo', ['nombre' => $nombre]);
    }
}

