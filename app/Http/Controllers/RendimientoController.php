<?php

namespace App\Http\Controllers;

use App\Models\Rendimiento;
use Illuminate\Http\Request;

class RendimientoController extends Controller
{
    public function index()
    {
        $rendimientos = Rendimiento::all();
        return view('rendimientos.index', compact('rendimientos'));
    }

    public function create()
    {
        return view('rendimientos.create');
    }

    public function store(Request $request)
    {
        $rendimiento = new Rendimiento($request->all());
        $rendimiento->save();
        return redirect()->route('rendimientos.index');
    }

    public function show(Rendimiento $rendimiento)
    {
        return view('rendimientos.show', compact('rendimiento'));
    }

    public function edit(Rendimiento $rendimiento)
    {
        return view('rendimientos.edit', compact('rendimiento'));
    }

    public function update(Request $request, Rendimiento $rendimiento)
    {
        $rendimiento->update($request->all());
        return redirect()->route('rendimientos.index');
    }

    public function destroy(Rendimiento $rendimiento)
    {
        $rendimiento->delete();
        return redirect()->route('rendimientos.index');
    }
}
