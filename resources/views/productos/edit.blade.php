@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $producto->nombre }}">
        </div>
        <div>
            <label>Descripción:</label>
            <textarea name="descripcion">{{ $producto->descripcion }}</textarea>
        </div>
        <div>
            <label>Stock:</label>
            <input type="number" name="stock" value="{{ $producto->stock }}">
        </div>
        <div>
            <label>Precio:</label>
            <input type="text" name="precio" value="{{ $producto->precio }}">
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
