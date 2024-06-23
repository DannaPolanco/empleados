@extends('layouts.app')

@section('content')
    <h1>{{ $producto->nombre }}</h1>
    <p>{{ $producto->descripcion }}</p>
    <p>Stock: {{ $producto->stock }}</p>
    <p>Precio: {{ $producto->precio }}</p>
    <a href="{{ route('productos.index') }}">Volver a la lista</a>
@endsection
