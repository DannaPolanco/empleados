@extends('layouts.app')

@section('content')
    <h1>Nuevo Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>Descripción:</label>
            <textarea name="descripcion"></textarea>
        </div>
        <div>
            <label>Stock:</label>
            <input type="number" name="stock">
        </div>
        <div>
            <label>Precio:</label>
            <input type="text" name="precio">
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
