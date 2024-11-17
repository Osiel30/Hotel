<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link rel="stylesheet" href="{{ asset('css/vista_clientes.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Barra de Navegación -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-image">
                HUPV
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#Hoteles">Hoteles</a></li>
                <li><a href="#informacion">Sobre nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Encabezado Principal -->
    <section class="hero">
        <div class="slider">
            <div class="slide" style="background-image: url('{{ asset('img/hotel1.jpg') }}');">
                <h1>Experience Luxury Beyond Ordinary</h1>
                <p>Book your dream stay today!</p>
                <button>Explore</button>
            </div>
            <div class="slide" style="background-image: url('{{ asset('img/hotel2.jpg') }}');">
                <h1>Relax and Unwind</h1>
                <p>Find your perfect getaway</p>
                <button>Discover More</button>
            </div>
            <div class="slide" style="background-image: url('{{ asset('img/hotel3.jpg') }}');">
                <h1>Relax and Unwind</h1>
                <p>Find your perfect getaway</p>
                <button>Discover More</button>
            </div>
            <div class="slide" style="background-image: url('{{ asset('img/hotel5.jpg') }}');">
                <h1>Relax and Unwind</h1>
                <p>Find your perfect getaway</p>
                <button>Discover More</button>
            </div>
        </div>
    </section>

    <!-- Sección de Habitaciones -->
    @include('components.rooms', [
        'rooms' => [
            ['name' => 'Double Room', 'description' => 'Comfortable room with two double beds, perfect for families.', 'price' => 150, 'image' => 'img/h2.jpg'],
            ['name' => 'Single Room', 'description' => 'A cozy room for solo travelers.', 'price' => 100, 'image' => 'img/h3.jpg'],
            ['name' => 'Suite', 'description' => 'Luxurious suite with premium amenities.', 'price' => 300, 'image' => 'img/h4.jpg'],
        ]
    ])

    <!-- Sección de Información -->
    @include('components.facilities')

    <!-- Pie de Página -->
    @include('components.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
