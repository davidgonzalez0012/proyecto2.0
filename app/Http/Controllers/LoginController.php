<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;



class LoginController extends Controller
{


    public function mostrarFormularioLogin()
    {
        return view('inicio_sesion');
    }

    public function ingresar(Request $request){

        // $request->validate([
        //     'tipo_usuario' => 'required|string',
        //     'nombre' => 'required|string',
        //     'password' => 'required|string',
        // ]);


        // $credentials = [
        //     "tipo_usuario" => $request->tipo_usuario,
        //     "nombre" => $request->nombre,
        //     "password" => bcrypt($request->password),
        // ];

        $user = User::where('nombre', $request->nombre)
            ->where('tipo_usuario', $request->tipo_usuario)
            ->first();


        if ($user && Hash::check($request->password, $user->contraseña)) {
            Auth::login($user);
            $request->session()->regenerate();

            // Redirigir según tipo de usuario
            if ($user->tipo_usuario === 'Empleador') {
                return redirect()->route('inicio_empleador');
            } elseif ($user->tipo_usuario === 'Trabajador') {
                return redirect()->route('inicio_empleado');
            } elseif ($user->tipo_usuario === 'Administrador') {
                return redirect()->route('inicio_adiministrador');
            }

        } else {
            return redirect(route('login'))->with('error', 'Credenciales incorrectas');
        }
    }

    public function login(Request $request)
    {
        //validacion

        $request->validate([
            'tipo_usuario' => 'required',
            'nombre' => 'required|string',
            'password' => 'required',
        ]);

        // Buscar el usuario con todas las condiciones
        $user = User::where('tipo_usuario', $request->tipo_usuario)
                    ->where('nombre', $request->nombre)
                    ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            switch ($user->tipo_usuario) {
                case 'Empleador':
                    return redirect()->route('empleador');
                case 'Trabajador':
                    return redirect()->route('empleado');
                // case 'Administrador':
                //     return redirect()->route('dashboard.admin');
                // default:
                //     return redirect()->route('dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->withInput($request->except('password'));
    }


public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect(route('pagina_inicio'));
}
}



