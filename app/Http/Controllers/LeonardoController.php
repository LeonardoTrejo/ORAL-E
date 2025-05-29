<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class LeonardoController extends BaseController
{
    // Ejercicio 3
    public function saludo()
    {
        return 'Hola mundo, soy Leonardo';
    }

    // Ejercicio 4
    public function saludoPersonalizado($nombre)
    {
        return 'Hace tiempo que no te veo ' . $nombre;
    }
}

