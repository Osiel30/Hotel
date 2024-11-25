@extends('layouts.app')

@section('head.content')
<link rel="stylesheet" href="{{ asset('css/listado.css') }}">
@endsection

@section('main.content')
<div class="main-content">
<main class="table" id="customers_table">
        <section class="table__header">
            <h1>Inventario</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div>
            <div class="top-bar">
                <a href="{{ route('inventario.create') }}" class="edit-button">Añadir Item</a>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Nombre Producto <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hotel <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Proveedor <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Cantidad <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Descripción <span class="icon-arrow">&UpArrow;</span></th>
                        <th></th>
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
                                    <a href="{{ route('inventario.edit', ['inventario' => $inventario->id_producto]) }}" class="edit-button">Editar</a>

                                    <form action="{{ route('inventario.destroy', $inventario->id_producto) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</div>

<form action="{{route('pdf')}}" method="GET">
    {{-- @csrf --}}
    <button class="delete-button" type="submit">Generar reporte</button>
</form>
@endsection

@section('sidebar.content')
    <div class="sidebar-content">Stock</div>
    <div class="sidebar-content">Ordenes</div>
@endsection


