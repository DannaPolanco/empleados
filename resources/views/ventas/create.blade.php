@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Venta</h2>

        <form action="{{ route('ventas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="producto">Producto</label>
                <input type="text" name="producto" class="form-control" id="producto" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" id="cantidad" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" class="form-control" id="precio" required>
            </div>
            <div class="form-group">
                <label for="fecha_venta">Fecha de Venta</label>
                <input type="date" name="fecha_venta" class="form-control" id="fecha_venta" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
