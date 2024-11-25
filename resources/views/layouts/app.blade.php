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
                <a href="{{ route('clientes.index') }}">
                    <img src="{{ asset('img/clientes.svg') }}" alt="Clientes" class="clientes-image">
                    <span>Clientes</span>
                </a>
            </div>
            <div class="menu-item">
                <img src="{{ asset('img/habitaciones.svg') }}" alt="Habitaciones" class="habitaciones-image">
                <span>Habitaciones</span>
            </div>
            <div class="menu-item">
                <a href="{{route('personal.index')}}">
                    <img src="{{ asset('img/personal.svg') }}" alt="Personal" class="personal-image"> 
                    <span>Personal</span>
                </a>
            </div>
            <div class="menu-item">
                <img src="{{ asset('img/facturas.svg') }}" alt="Facturas" class="facturas-image">
                <span>Facturas</span>
            </div>
            <div class="menu-item">
                <a href="{{route('promociones.index')}}">
                    <img src="{{ asset('img/marketing.svg') }}" alt="Marketing" class="marketing-image">
                    <span>Marketing</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{route('inventario.index')}}">
                    <img src="{{ asset('img/inventario.svg') }}" alt="Inventario" class="inventario-image">
                    <span>Inventario</span>
                </a>
            </div>
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
