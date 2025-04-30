<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class RecoverPasswordController extends Controller
{

    public function recuperar_contrasena(Request $request)
    {
        // Validación del correo electrónico
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email',
        ]);
        
        // Generar token y enviar email de recuperación
        // ...
        
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Se ha enviado un enlace de recuperación a tu correo electrónico.'
            ]);
        }
        
        return redirect()->route('login')
            ->with('success', 'Se ha enviado un enlace de recuperación a tu correo electrónico.');
    }
    
}