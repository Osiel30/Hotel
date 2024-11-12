@extends('layouts.app')

@section('head.content')
<link rel="stylesheet" href="{{ asset('css/listado.css') }}">
@endsection

@section('main.content')
<div class="main-content">
<main class="table" id="customers_table">
        <section class="table__header">
            <h1>Clientes</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div>
            <div class="top-bar">
                <a href="{{ route('clientes.create') }}" class="edit-button">Añadir Cliente</a>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellidos <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Telefono <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Direccion <span class="icon-arrow">&UpArrow;</span></th>
                        <th></th>
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
                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="edit-button">Editar</a>

                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="delete-form">
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
<ul>
    <li class="sidebar-content"><a href="#">Estadísticas</a></li>
    <li class="sidebar-content"><a href="#">Mapeo</a></li>
    <li class="sidebar-content"><a href="#">Clientes</a></li>
    <li class="sidebar-content"><a href="#">Ocupación</a></li>
    <li class="sidebar-content"><a href="#">Reportes</a></li>
</ul>
@endsection