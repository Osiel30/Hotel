<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head.content')
</head>
<body>
    <header class="header">
        <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-image">
            <span>HUPV</span>
        </div>
        <div class="menu-items">
            <div class="menu-item">
            <img src="{{ asset('img/reservaciones.svg') }}" alt="Reservaciones" class="reservaciones-image">
                <span>Reservaciones</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/clientes.svg') }}" alt="Clientes" class="clientes-image">
                <span>Clientes</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/habitaciones.svg') }}" alt="Habitaciones" class="habitaciones-image">
                <span>Habitaciones</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/personal.svg') }}" alt="Personal" class="personal-image">
                <span>Personal</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/facturas.svg') }}" alt="Facturas" class="facturas-image">
                <span>Facturas</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/marketing.svg') }}" alt="Marketing" class="marketing-image">
                <span>Marketing</span>
            </div>
            <div class="menu-item">
            <img src="{{ asset('img/inventario.svg') }}" alt="Inventario" class="inventario-image">
                <span>Inventario</span>
            </div>
        </div>
        <div class="profile-icons">
        <img src="{{ asset('img/bell2.png') }}" alt="Notificaciones" class="notificaciones-image">
        <img src="{{ asset('img/userIcon.png') }}" alt="User" class="user-image">
        </div>
    </header>

    <div class="content">
        <div class="sidebar">
            @yield('sidebar.content')
        </div>

        <div class="main">
            @yield('main.content') 
        </div>
    </div>

    @yield('body.content')

</body>
</html>
