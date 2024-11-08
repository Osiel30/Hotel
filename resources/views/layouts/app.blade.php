<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel HUPV</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-image">
            <span>HUPV</span>
        </div>
        <div class="menu-items">
            <div class="menu-item">
            <img src="{{ asset('img/Mis_reservas.png') }}" alt="Reservaciones" class="reservaciones-image">
                <span>Reservaciones</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/Clientes.png') }}" alt="Clientes" class="clientes-image">
                <span>Clientes</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/Habitaciones1.png') }}" alt="Habitaciones" class="habitaciones-image">
                <span>Habitaciones</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/Personal.png') }}" alt="Personal" class="personal-image">
                <span>Personal</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/Facturas.png') }}" alt="Facturas" class="facturas-image">
                <span>Facturas</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/Marketing.png') }}" alt="Marketing" class="marketing-image">
                <span>Marketing</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/Inventario.png') }}" alt="Inventario" class="inventario-image">
                <span>Inventario</span>
            </div>
        </div>
        <div class="profile-icons">
        <img src="{{ asset('img/Notificacion.png') }}" alt="Notificaciones" class="notificaciones-image">
        <img src="{{ asset('img/Usuario.png') }}" alt="User" class="user-image">
        </div>
    </header>

    <div class="container">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li class="sidebar-item"><a href="#">Estadisticas</a></li>
                <li class="sidebar-item"><a href="#">Mapeo</a></li>
                <li class="sidebar-item"><a href="#">Clientes</a></li>
                <li class="sidebar-item"><a href="#">Ocupacion</a></li>
                <li class="sidebar-item"><a href="#">Reportes</a></li>
            </ul>
        </div>

        <main class="main-content">
            @yield('content') 
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
