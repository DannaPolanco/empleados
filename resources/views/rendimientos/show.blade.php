@extends('layouts.app')

@section('content')
    <h1>{{ $rendimiento->empleado }}</h1>
    <p>Ventas Realizadas: {{ $rendimiento->ventas_realizadas }}</p>
    <p>Total Ventas: {{ $rendimiento->total_ventas }}</p>
    <a href="{{ route('rendimientos.index') }}">Volver a la lista</a>
@endsection
