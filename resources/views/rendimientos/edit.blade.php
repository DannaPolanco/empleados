@extends('layouts.app')

@section('content')
    <h1>Editar Rendimiento</h1>
    <form action="{{ route('rendimientos.update', $rendimiento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Empleado:</label>
            <input type="text" name="empleado" value="{{ $rendimiento->empleado }}">
        </div>
        <div>
            <label>Ventas Realizadas:</label>
            <input type="number" name="ventas_realizadas" value="{{ $rendimiento->ventas_realizadas }}">
        </div>
        <div>
            <label>Total Ventas:</label>
            <input type="text" name="total_ventas" value="{{ $rendimiento->total_ventas }}">
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
