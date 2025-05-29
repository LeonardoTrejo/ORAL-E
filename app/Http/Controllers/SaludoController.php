<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function index($saludo = null)
    {
        return "Hace tiempo que no te veo $saludo";
    }
}
