<?php




namespace App\Http\Controllers;
use App\Http\Controllers\Auth\RegistroController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;

Route::get('/', function () {
    return view('welcome');
});



//vista formularios
Route::get('/pagina_inicio', [HomePageController::class, 'iniciopagina']);
Route::get('/login', [LoginController::class, 'mostrarFormularioLogin'])->name('login');
Route::get('/buscar_empleo', [ApplicationsController::class, 'buscar']);
Route::get('/publicar_empleo', [OfferController::class, 'publicar']);
Route::get('/recuperar', [RecoverPasswordController::class, 'recuperar_contrasena'])->name('recuperacion');

//que es esto?
Route::get('/registro', [RecordController::class, 'mostrarFormularioRegistro'])->name('registro');
//

// //vistas
// route::view('/inicio_empleador',[EmployerController::class, 'inicio_empleador'])->name('empleador');
// route::view('/inicio_empleado',[EmployerController::class,'inicio_empleado'])->name('empleado');

route::view('/inicio_empleador',[EmployerController::class, 'inicio_empleador'])->name('empleador');
route::view('/inicio_empleado',[EmployerController::class,'inicio_empleado'])->name('empleado');



route::post('/iniciar', [LoginController::class, 'login'])->name('iniciado');

Route::post('/registro', [RecordController::class, 'registrar'])->name('registro');

