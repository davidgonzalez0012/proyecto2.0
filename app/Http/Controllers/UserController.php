<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function store (Request $request){
        $Usuario = new User();
        $Usuario -> rol = $request-> rol;
        $Usuario -> nombre = $request-> nombre;
        $Usuario -> email = $request-> email;
        $Usuario -> contraseña = $request-> contraseña;

        $Usuario ->save();

        return $Usuario;
    }

    public function recuperar_contraseña(Request $request){
        $Usuario = NEW User();
        $Usuario -> email = $request -> email;

        // $request->validate([
        //     'email' => 'required|email',
        // ]);
        // $existe = Usuario::where('email', $request->email)->exists();
    }
}
