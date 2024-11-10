<?php
namespace App\Http\Controllers\Auth;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Login_Clientes');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    $credentials = $request->only('email', 'password');
    
    if (Auth::guard('web')->attempt($credentials)) {
        return redirect()->route('clientes.index');  
    }

    return redirect()->route('login')->withErrors([
        'email' => 'Las credenciales no coinciden con nuestros registros.',
    ]);
}



    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
