<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function ventas()
    {
        // Lógica para manejar la vista de ventas de empleados
        return view('empleados.ventas');
    }
}
