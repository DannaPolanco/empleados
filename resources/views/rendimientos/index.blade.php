@extends('layouts.app')

@section('content')
    <h1>Rendimientos</h1>
    <a href="{{ route('rendimientos.create') }}">Nuevo Rendimiento</a>
    <table>
        <thead>
            <tr>
                <th>Empleado</th>
                <th>Ventas Realizadas</th>
                <th>Total Ventas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rendimientos as $rendimiento)
                <tr>
                    <td>{{ $rendimiento->empleado }}</td>
                    <td>{{ $rendimiento->ventas_realizadas }}</td>
                    <td>{{ $rendimiento->total_ventas }}</td>
                    <td>
                        <a href="{{ route('rendimientos.show', $rendimiento->id) }}">Ver</a>
                        <a href="{{ route('rendimientos.edit', $rendimiento->id) }}">Editar</a>
                        <form action="{{ route('rendimientos.destroy', $rendimiento->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
