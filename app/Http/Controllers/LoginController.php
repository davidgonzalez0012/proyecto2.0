<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class LoginController extends Controller
{

    public Function vista(){
        return view('sesion_iniciada');
    }

    public function mostrarFormularioLogin()
    {
        return view('inicio_sesion');
    }


    public function iniciarSesion(Request $request)
    {
        $request->validate([
            'tipo_usuario' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['tipo_usuario'] = $request->tipo_usuario;

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            // Redirección según el tipo de usuario
            switch ($request->tipo_usuario) {
                case 'Empleador':
                    return redirect()->intended('dashboard/empleador');
                case 'Trabajador':
                    return redirect()->intended('dashboard/trabajador');
                case 'Administrador':
                    return redirect()->intended('dashboard/admin');
                default:
                    return redirect()->intended('dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->withInput($request->except('password'));
    }


public function cerrarSesion(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}
}



