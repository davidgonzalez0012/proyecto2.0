<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//vista formularios
Route::get('/pagina_inicio', [HomePageController::class, 'iniciopagina']);
Route::get('/login', [LoginController::class, 'mostrarFormularioLogin'])->name('login');
Route::get('/buscar_empleo', [ApplicationsController::class, 'buscar']);
Route::get('/publicar_empleo', [OfferController::class, 'publicar']);
Route::get('/registro', [RecordController::class, 'mostrarFormularioRegistro'])->name('registro');
Route::get('/recuperar', [RecoverPasswordController::class, 'recuperar_contrasena'])->name('recuperacion');


