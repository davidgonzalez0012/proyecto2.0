<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class LoginController extends Controller
{


    public function mostrarFormularioLogin()
    {
        return view('inicio_sesion');
    }


    public function iniciarSesion(Request $request)
    {
        $request->validate([
            'tipo_usuario' => 'required',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar el usuario con todas las condiciones
        $user = User::where('email', $request->email)
                    ->where('username', $request->username)
                    ->where('tipo_usuario', $request->tipo_usuario)
                    ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            switch ($user->tipo_usuario) {
                case 'Empleador':
                    return redirect()->route('empleador');
                case 'Trabajador':
                    return redirect()->route('empleado');
                case 'Administrador':
                    return redirect()->route('dashboard.admin');
                default:
                    return redirect()->route('dashboard');
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



