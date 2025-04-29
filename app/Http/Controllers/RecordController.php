<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Worker;
use App\Models\Employer;
use App\Models\Administrator;


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

        if ($user->tipo_usuario === 'empleado') {
            $worker = new Worker();
            $worker->usuario_id = $user->id;
            $worker->save();
        } elseif ($user->tipo_usuario === 'empleador') {
            $employer = new Employer();
            $employer->usuario_id = $user->id;
            $employer->save();
        }elseif ($user->tipo_usuario === 'administrador') {
            $administrator = new Administrator();
            $administrator->usuario_id = $user->id;
            $administrator->save();
        }

        auth::login($user);

        switch ($request->tipo_usuario) {
            case 'empleado':
                return redirect()->route('empleado');
            case 'empleador':
                return redirect()->route('empleador');
                default:
                return redirect('/login');
        }

}
}
