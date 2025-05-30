<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller2 extends Controller
{
     public function controlador2($nombre)
    {
        return view('Controlador2', [
            'nombre' => $nombre
        ]);
    }
}
