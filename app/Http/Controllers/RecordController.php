<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employer;
 use App\Models\Worker;

use Illuminate\Http\Request;

class RecordController extends Controller
{



public function registrar(Request $request)
{
    // Validación y lógica de registro
    // $validatedData = $request->validate([
    //     'tipo_usuario' => 'required|in:empleador,empleado',
    //     'nombre' => 'required|string|max:255',
    //     'email' => 'required|string|email|max:255|unique:users',
    //     'password' => 'required|string|min:8|confirmed',

    // ]);

    $user = new User();
        $user -> tipo_usuario = $request->input('tipo_usuario');
          $user ->nombre = $request->input('nombre');
          $user ->email = $request->input('email');
          $user ->password =bcrypt($request->input('password'));
    
          $user->save();


    // if ($user->tipo_usuario === 'empleador') {
    //     $employer = new Employer();
    //     $employer->user_id = $user->id;
    //     $employer->save();
    // } elseif ($user->tipo_usuario === 'empleado') {
    //     $worker = new Worker();
    //     $worker->user_id = $user->id;
    //     $worker->save();
    // }

    
    if ($request->ajax()) {
        return response()->json([
            'success' => true,
            'message' => '¡Registro exitoso! Ahora puedes iniciar sesión.'
        ]);
    }

    return redirect()->route('login')->with('success', '¡Registro exitoso! Ahora puedes iniciar sesión.');
}
}
