@extends('layouts.app')

@section('head.content')
<link rel="stylesheet" href="{{ asset('css/listado.css') }}">
@endsection

@section('main.content')
<div class="main-content">
    <main class="table" id="personal_table">
        <section class="table__header">
            <h1>Lista de Personal</h1>
            <div class="input-group">
                <input type="search" placeholder="Buscar...">
            </div>
            <div class="top-bar">
                <a href="{{ route('personal.create') }}" class="edit-button">+ Añadir Personal</a>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Puesto <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Turno <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Fecha Ingreso <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Tarea Asignada <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Hora Entrada <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Hora Salida <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Acceso <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Área Asignada <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Estado <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Teléfono <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Hotel <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Rol <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personal as $persona)
                    <tr>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->puesto }}</td>
                        <td>{{ $persona->turno }}</td>
                        <td>{{ $persona->fecha_ingreso }}</td>
                        <td>{{ $persona->tarea_asignada }}</td>
                        <td>{{ $persona->hora_entrada }}</td>
                        <td>{{ $persona->hora_salida }}</td>
                        <td>{{ $persona->acceso }}</td>
                        <td>{{ $persona->area_asignada }}</td>
                        <td>{{ $persona->estado }}</td>
                        <td>{{ $persona->email }}</td>
                        <td>{{ $persona->telefono }}</td>
                        <td>{{ $persona->hotel->nombre }}</td>
                        <td>
                            @switch($persona->id_rol)
                                @case(1)
                                    Cliente
                                    @break
                                @case(2)
                                    Trabajador General
                                    @break
                                @case(3)
                                    Admin del Sistema
                                    @break
                                @default
                                    Desconocido
                            @endswitch
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('personal.edit', $persona->id_personal) }}" class="edit-button">Editar</a>
                                <form action="{{ route('personal.destroy', $persona->id_personal) }}" method="POST" class="delete-form">
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
