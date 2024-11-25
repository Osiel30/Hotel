<!DOCTYPE html>
<html lang="en">
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
            <div class="menu-item {{ $currentSection == 'reservaciones' ? 'active' : '' }}">
                <img src="{{ asset('img/reservaciones.svg') }}" alt="Reservaciones" class="reservaciones-image">
                <span>Reservaciones</span>
            </div>
            <a href="{{ route('clientes.index') }}">
                <div class="menu-item {{ $currentSection == 'clientes' ? 'active' : '' }}">
                    <img src="{{ asset('img/clientes.svg') }}" alt="Clientes" class="clientes-image">
                    <span>Clientes</span>
                </div>
            </a>
            <div class="menu-item {{ $currentSection == 'habitaciones' ? 'active' : '' }}">
                <img src="{{ asset('img/habitaciones.svg') }}" alt="Habitaciones" class="habitaciones-image">
                <span>Habitaciones</span>
            </div>
            <a href="{{ route('personal.index') }}">
                <div class="menu-item {{ $currentSection == 'personal' ? 'active' : '' }}">
                    <img src="{{ asset('img/personal.svg') }}" alt="Personal" class="personal-image">
                    <span>Personal</span>
                </div>
            </a>
            <div class="menu-item {{ $currentSection == 'facturas' ? 'active' : '' }}">
                <img src="{{ asset('img/facturas.svg') }}" alt="Facturas" class="facturas-image">
                <span>Facturas</span>
            </div>
            <a href="{{ route('promociones.index') }}">
                <div class="menu-item {{ $currentSection == 'marketing' ? 'active' : '' }}">
                    <img src="{{ asset('img/marketing.svg') }}" alt="Marketing" class="marketing-image">
                    <span>Marketing</span>
                </div>
            </a>
            <a href="{{ route('inventario.index') }}">
                <div class="menu-item {{ $currentSection == 'inventario' ? 'active' : '' }}">
                    <img src="{{ asset('img/inventario.svg') }}" alt="Inventario" class="inventario-image">
                    <span>Inventario</span>
                </div>
            </a>
        </div>
        <div class="profile-icons">
            <img src="{{ asset('img/bell2.png') }}" alt="Notificaciones" class="notificaciones-image">
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                    <img src="{{ asset('img/userIcon.png') }}" alt="User" class="user-image">
                </button>
            </form>
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
