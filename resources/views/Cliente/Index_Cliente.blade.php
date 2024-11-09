@extends('layouts.app')

@section('main.content')
<div class="main-content">
    <h2>Lista de Clientes</h2>
    <div class="top-bar">
        <a href="{{ route('clientes.create') }}" class="new-button">+ Crear Cliente</a>
    </div>

    <table class="clients-table">
        <thead>
            <tr> 
                <th>Nombre</th>
                <th>Apellidos</th> 
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellidos }}</td> 
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>
                    <div class="action-buttons">
                        <button class="action-menu-btn">
                            <img src="{{ asset('img/Opciones.png') }}" alt="Opciones" class="opciones-image">
                        </button>
                        <div class="action-dropdown">
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="edit-button">Editar</a>

                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="delete-form">
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
</div>
@endsection

@section('sidebar.content')
<ul>
<li class="sidebar-content"><a href="#">Estadísticas</a></li>
<li class="sidebar-content"><a href="#">Mapeo</a></li>
<li class="sidebar-content"><a href="#">Clientes</a></li>
<li class="sidebar-content"><a href="#">Ocupación</a></li>
<li class="sidebar-content"><a href="#">Reportes</a></li>
</ul>
@endsection