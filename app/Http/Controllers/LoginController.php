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
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)
                    ->where('tipo_usuario', $request->tipo_usuario)
                    ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            switch ($user->tipo_usuario) {
                case 'Empleador':
                    return redirect('sesion_iniciada');
                    // return redirect()->intended('dashboard/empleador');
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



