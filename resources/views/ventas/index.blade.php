@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de Ventas</h2>
        <a href="{{ route('ventas.create') }}" class="btn btn-primary mb-2">Crear Venta</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Fecha de Venta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <td>{{ $venta->id }}</td>
                        <td>{{ $venta->producto }}</td>
                        <td>{{ $venta->cantidad }}</td>
                        <td>{{ $venta->precio }}</td>
                        <td>{{ $venta->fecha_venta }}</td>
                        <td>
                            <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
