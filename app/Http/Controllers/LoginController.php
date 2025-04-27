<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{


    public function mostrarFormularioLogin()
    {
        return view('inicio_sesion');
    }

    public function ingresar(Request $request){

        $credentials = [
        'nombre' => $request->nombre,
        'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {

            $tipoUsuario = Auth::user()->tipo_usuario;

                switch ($tipoUsuario) {
                    case 'empleado':
                        return redirect()->route('empleado');
                    case 'empleador':
                        return redirect()->route('empleador');
                    case 'administrador':
                        return redirect()->route('administrador');
                }


        }
        else {
            return redirect(route('login'))->with('error', 'Credenciales incorrectas. Por favor, intenta nuevamente.');
        }
    }

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect(route('pagina_inicio'));
}
}



