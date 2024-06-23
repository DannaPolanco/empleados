@extends('layouts.app')

@section('content')
    <h1>Nuevo Rendimiento</h1>
    <form action="{{ route('rendimientos.store') }}" method="POST">
        @csrf
        <div>
            <label>Empleado:</label>
            <input type="text" name="empleado">
        </div>
        <div>
            <label>Ventas Realizadas:</label>
            <input type="number" name="ventas_realizadas">
        </div>
        <div>
            <label>Total Ventas:</label>
            <input type="text" name="total_ventas">
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
