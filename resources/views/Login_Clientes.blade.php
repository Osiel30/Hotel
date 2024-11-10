<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cliente - Hotel</title>
    <link rel="stylesheet" href="{{ asset('/css/Login_Cliente.css') }}">
</head>
<body>

    <div class="container">
        <div class="login-box">
            <div class="logo">
                <img src="img/logo.png" alt="Logo del Hotel" class="logo-image">
                <h1>HOTEL HUPV</h1>
            </div>
            
            <h2>Iniciar Sesión</h2>

            <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="input-group">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="input-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit" class="manage-button">Iniciar Sesión</button>
</form>


            <button class="manage-button" onclick="window.location.href='empleado-login.html'">¿Eres Empleado?</button>
        </div>
    </div>

</body>
</html>
