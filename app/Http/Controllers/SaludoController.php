<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function index($saludo = null)
    {
        return view('posts.index', [
                'saludo' => $saludo
        ]);
    }
}
