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

    public function formularioReinicio(Request $request, $token = null)
    {
        return view('auth.passwords.userReset', ['token' => $token, 'email' => $request->email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::broker('User')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($User, $password) {
                $User->password = Hash::make($password);
                $User->setRememberToken(Str::random(60));
                $User->save();

                event(new PasswordReset($User));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('worker.login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
    /*public function recuperar_contrasena(Request $request)
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
    */
}