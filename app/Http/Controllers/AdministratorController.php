<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    // Muestra la vista del inicio del administrador
    public function inicio_administrador()
    {
        return view('inicio_administrador');
    }

    // Muestra la lista de usuarios en la vista de gestión de usuarios
    public function admin()
    {
        $users = User::all();
        return view('gestion_usuarios', compact('users'));
    }

    // Muestra un usuario específico (corregido)
    public function show(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('gestion_users')->with('error', 'Usuario no encontrado.');
        }

        return view('detalle_usuario', compact('user')); // Cambiar según la vista que se desee mostrar
    }

    // Elimina un usuario específico (corregido)
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('gestion_users')->with('success', 'Usuario eliminado exitosamente.');
    }
}
