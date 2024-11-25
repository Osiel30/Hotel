<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="menu container">
            <h1>HUPV</h1>
            <p>Reservaciones de Hoteles</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h2>Register</h2>

                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="login-button">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
