<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/Login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="card">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="menu container">
            <h1>HUPV</h1>
            <p>Reservaciones de Hoteles</p>
            <form>
                <h2>Login</h2>
                <div class="input-group">
                    <label>User</label>
                    <input type="email" placeholder="User">
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" placeholder="Password">
                </div>
                <a href="#" class="forgot-password">Forget Password?</a>
                <button type="submit" class="login-button">Login</button>
                <p class="signup-text">Don't Have an Account? <a href="signup.html">SIGN UP</a></p>
            </form>
        </div>
    </div>
</body>
</html>
