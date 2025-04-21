<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    
    public function buscar()
    {
        return view('empleos');
    }
    //
    public function buscar_empleos(Request $request){
        $Postulacion = new Application();
        $Postulacion -> palabra_clave = $request -> palabra;
        $Postulacion -> categoria = $request -> categoria;
        $Postulacion -> ubicacion = $request -> ubiacion;
        $Postulacion -> save();

        // return $Postulacion
    }
}
