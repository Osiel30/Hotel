@extends('layouts.app')

@section('head.content')
<link rel="stylesheet" href="{{ asset('css/listado.css') }}">
@endsection

@section('main.content')
<div class="main-content">
    <main class="table" id="promotions_table">
        <section class="table__header">
            <h1>Promociones</h1>
            <div class="input-group">
                <input type="search" placeholder="Buscar Promoción...">
            </div>
            <div class="top-bar">
                <a href="{{ route('promociones.create') }}" class="edit-button">Añadir Promoción</a>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Tipo <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Descripción <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Código <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Descuento <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha Inicio <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha Fin <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Activo <span class="icon-arrow">&UpArrow;</span></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($promociones as $promocion)
                    <tr>
                        <td>{{ $promocion->nombre }}</td>
                        <td>{{ ucfirst($promocion->tipo) }}</td>
                        <td>{{ $promocion->descripcion }}</td>
                        <td>{{ $promocion->codigo_promocional }}</td>
                        <td>{{ $promocion->descuento ?? 'N/A' }}</td>
                        <td>{{ $promocion->fecha_inicio }}</td>
                        <td>{{ $promocion->fecha_fin }}</td>
                        <td>{{ $promocion->activo ? 'Sí' : 'No' }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('promociones.edit', $promocion->id) }}" class="edit-button">Editar</a>
                                <form action="{{ route('promociones.destroy', $promocion->id) }}" method="POST" class="delete-form">
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
@endsection

@section('sidebar.content')
    <div class="sidebar-content">Promociones Activas</div>
    <div class="sidebar-content">Promociones Expiradas</div>
@endsection
