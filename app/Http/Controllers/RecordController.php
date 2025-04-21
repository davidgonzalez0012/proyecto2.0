<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class RecordController extends Controller
{

    public function mostrarFormularioRegistro(){
        return view('registrousuario');
    }

public function registrar(Request $request)
{
    // Validación y lógica de registro
    $validatedData = $request->validate([
        'tipo_usuario' => 'required|in:empleador,empleado',
        'nombre' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',

    ]);

    // Crear usuario
    // ...

    if ($request->ajax()) {
        return response()->json([
            'success' => true,
            'message' => '¡Registro exitoso! Ahora puedes iniciar sesión.'
        ]);
    }

    return redirect()->route('login')->with('success', '¡Registro exitoso! Ahora puedes iniciar sesión.');
}
}




