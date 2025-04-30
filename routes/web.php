<?php




namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/', function () {
    return view('welcome');
});



//vista formularios
Route::get('/pagina_inicio', [HomePageController::class, 'iniciopagina'])->name('pagina_inicio');
Route::get('/login', [LoginController::class, 'mostrarFormularioLogin'])->name('login');
Route::get('/buscar_empleo', [ApplicationsController::class, 'buscar']);
Route::get('/publicar_empleo', [OfferController::class, 'publicar'])->name('publicar_empleo');


// //vistas
// route::view('/inicio_empleador',[EmployerController::class, 'inicio_empleador'])->name('empleador');


Route::middleware('auth')->group(function () {
    route::get('/inicio_empleador', [EmployerController::class, 'inicio_empleador'])->name('empleador');
    route::get('/inicio_empleado', [WorkerController::class, 'inicio_empleado'])->name('empleado');
    route::get('/inicio_administrador', [AdministratorController::class, 'inicio_administrador'])->name('administrador');


    //trabajado patra administrador
    route::get('/gestion', [AdministratorController::class, 'admin'])->name('gestion_users');
    Route::get('/usuarios/{id}', [AdministratorController::class, 'show'])->name('usuarios.show');
    Route::delete('/usuarios/{id}', [AdministratorController::class, 'destroy'])->name('usuarios.destroy');


    route::get('/mis_publicaciones', [OfferController::class, 'ver'])->name('mis_publicaciones');

});

//salir
route::get('logout', [LoginController::class, 'logout'])->name('logout');

route::post('/guardar_empleo', [OfferController::class, 'publicar_empleos'])->name('guardar_empleo');


route::post('/iniciar', [LoginController::class, 'ingresar'])->name('iniciado');
Route::post('/registro', [RecordController::class, 'registrar'])->name('registro');
Route::post('/recuperar', [RecoverPasswordController::class, 'recuperar_contrasena'])->name('recuperacion');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

