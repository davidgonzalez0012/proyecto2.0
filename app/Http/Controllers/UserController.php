<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function store (Request $request){

        //validar datos... pendiente

        $Usuario = new User();
        $Usuario -> tipo_usuario = $request-> tipo_usuario;
        $Usuario -> nombre = $request-> nombre;
        $Usuario -> email = $request-> email;
        $Usuario -> password = hash::make($request-> password);

        $Usuario ->save();


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
