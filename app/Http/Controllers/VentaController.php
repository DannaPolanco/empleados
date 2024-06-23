<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto' => 'required|string',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
            'fecha_venta' => 'required|date',
        ]);

        Venta::create($request->all());

        return redirect()->route('ventas.index')
                         ->with('success', 'Venta creada correctamente.');
    }

    public function edit(Venta $venta)
    {
        return view('ventas.edit', compact('venta'));
    }

    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'producto' => 'required|string',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
            'fecha_venta' => 'required|date',
        ]);

        $venta->update($request->all());

        return redirect()->route('ventas.index')
                         ->with('success', 'Venta actualizada correctamente.');
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();

        return redirect()->route('ventas.index')
                         ->with('success', 'Venta eliminada correctamente.');
    }
}

