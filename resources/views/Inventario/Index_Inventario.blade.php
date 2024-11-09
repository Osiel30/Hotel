@extends('layouts.app')

@section('content')
<main class="main-content">
    <h2>Lista de Inventarios</h2>
    <div class="top-bar">
        <a href="{{ route('inventario.create') }}" class="new-button">+ Crear Producto</a>
    </div>

    <table class="clients-table">
        <thead>
            <tr> 
                <th>Nombre Producto</th>
                <th>Hotel</th> 
                <th>Proveedor</th>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventarios as $inventario)
            <tr>
                <td>{{ $inventario->nombre_producto }}</td>
                <td>{{ $inventario->hotel->nombre }}</td>
                <td>{{ $inventario->proveedor->nombre }}</td>
                <td>{{ $inventario->cantidad }}</td>
                <td>{{ $inventario->descripcion }}</td>
                <td>
                    <div class="action-buttons">
                        <button class="action-menu-btn">
                            <img src="{{ asset('img/Opciones.png') }}" alt="Opciones" class="opciones-image">
                        </button>
                        <div class="action-dropdown">
                        <a href="{{ route('inventario.edit', ['inventario' => $inventario->id_producto]) }}" class="edit-button">Editar</a>

                        <form action="{{ route('inventario.destroy', $inventario->id_producto) }}" method="POST" class="delete-form">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete-button">Borrar</button>

</form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
