<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class RecordController extends Controller
{



public function registrar(Request $request)
{


    $user = new User();
            $user -> tipo_usuario = $request->tipo_usuario;
            $user ->nombre = $request->nombre;
            $user ->email = $request->email;
            $user ->password = hash::make($request->password);

        $user->save();

        auth::login($user);

        switch ($request->tipo_usuario) {
            case 'empleado':
                return redirect()->route('empleado');
            case 'empleador':
                return redirect()->route('empleador');
        }

}
}
