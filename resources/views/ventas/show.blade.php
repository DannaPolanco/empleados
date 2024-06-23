@extends('layouts.app')

@section('content')
    <h1>Detalles de la Venta</h1>
    <p>Producto: {{ $venta->producto }}</p>
    <p>Cantidad: {{ $venta->cantidad }}</p>
    <p>Precio: {{ $venta->precio }}</p>
    <p>Fecha de Venta: {{ $venta->fecha_venta }}</p>
    <a href="{{ route('ventas.index') }}">Volver a la lista</a>
@endsection
