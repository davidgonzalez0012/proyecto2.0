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
Route::get('/pagina_inicio', [HomePageController::class, 'iniciopagina'])->name('pagina_inicio');
Route::get('/login', [LoginController::class, 'mostrarFormularioLogin'])->name('login');
Route::get('/buscar_empleo', [ApplicationsController::class, 'buscar']);
Route::get('/publicar_empleo', [OfferController::class, 'publicar'])->name('publicar_empleo');
Route::get('/recuperar', [RecoverPasswordController::class, 'recuperar_contrasena'])->name('recuperacion');

// //vistas
// route::view('/inicio_empleador',[EmployerController::class, 'inicio_empleador'])->name('empleador');


Route::middleware('auth')->group(function () {
    route::get('/inicio_empleador', [EmployerController::class, 'inicio_empleador'])->name('empleador');
    route::get('/inicio_empleado', [WorkerController::class, 'inicio_empleado'])->name('empleado');
    route::get('/inicio_administrador', [AdministratorController::class, 'inicio_administrador'])->name('administrador');
});

//salir
route::get('logout', [LoginController::class, 'logout'])->name('logout');
//


route::post('/iniciar', [LoginController::class, 'ingresar'])->name('iniciado');
Route::post('/registro', [RecordController::class, 'registrar'])->name('registro');




