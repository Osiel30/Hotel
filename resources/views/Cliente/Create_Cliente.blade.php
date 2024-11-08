@extends('layouts.app') 

@section('content')
    <div class="main-content">
        <h2>Registro de Cliente</h2>

            
            <form action="cliente-registro.html" method="POST">
                @csrf <!-- Asegúrate de agregar CSRF token si es un formulario real en Laravel -->
                <div class="input-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
                <div class="input-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="confirmar-email">Confirmar Correo:</label>
                    <input type="email" id="confirmar-email" name="confirmar-email" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="confirmar-password">Confirmar Contraseña:</label>
                    <input type="password" id="confirmar-password" name="confirmar-password" required>
                </div>
                <div class="input-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>

                <button type="submit" class="manage-button">Registrar</button>
            </form>
        </div>
    </div>
@endsection

@section('sidebar')
<li class="sidebar-item"><a href="#">Estadisticas</a></li>
    <li class="sidebar-item"><a href="#">Mapeo</a></li>
    <li class="sidebar-item"><a href="#">Clientes</a></li>
    <li class="sidebar-item"><a href="#">Ocupacion</a></li>
    <li class="sidebar-item"><a href="#">Reportes</a></li>
@endsection
