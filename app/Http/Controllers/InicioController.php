<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function bienvenida($nombre = null, $apellido = null)
    {
        return view('inicio.bienvenida', compact('nombre', 'apellido'));
    }

    public function contacto()
    {
        return view('inicio.contacto');
    }
}
