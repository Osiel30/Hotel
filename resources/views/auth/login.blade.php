<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="menu container">
            <h1>HUPV</h1>
            <p>Reservaciones de Hoteles</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h2>Login</h2>
                <div class="input-group">
                    <label for="email">User</label>
                    <input type="email" id="email" name="email" placeholder="User" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                {{-- <a href="{{ route('password.request') }}" class="forgot-password">Forget Password?</a> --}}
                <button type="submit" class="login-button">Login</button>
                <p class="signup-text">Don't Have an Account? <a href="{{ route('register') }}">SIGN UP</a></p>
            </form>
        </div>
    </div>
</body>
</html>
