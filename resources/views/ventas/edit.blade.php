@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Venta</h2>

        <form action="{{ route('ventas.update', $venta->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="producto">Producto</label>
                <input type="text" name="producto" class="form-control" id="producto" value="{{ $venta->producto }}" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" id="cantidad" value="{{ $venta->cantidad }}" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" class="form-control" id="precio" value="{{ $venta->precio }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_venta">Fecha de Venta</label>
                <input type="date" name="fecha_venta" class="form-control" id="fecha_venta" value="{{ $venta->fecha_venta }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
