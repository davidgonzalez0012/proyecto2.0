<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//vista formularios
Route::get('/pagina_inicio', [PaginaInicioController::class, 'iniciopagina']);
Route::get('/login', [InicioSesionController::class, 'mostrarFormularioLogin'])->name('login');
Route::get('/buscar_empleo', [PostulacionController::class, 'buscar']);
Route::get('/publicar_empleo', [OfertaController::class, 'publicar']);
Route::get('/registro', [RegistroController::class, 'mostrarFormularioRegistro'])->name('registro');
Route::get('/recuperar', [RecuperarContraseñaController::class, 'recuperar_contrasena'])->name('recuperacion');


//ingreso de datos formularios 
//inicio de sesion
Route::post('/login2', [InicioSesionController::class, 'iniciarSesion']);
Route::post('/cerrar-sesion', [InicioSesionController::class, 'cerrarSesion'])->name('logout');

//registro de usuario

Route::post('/registro', [RegistroController::class, 'registrar']);


