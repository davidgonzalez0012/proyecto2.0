<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function inicio_empleado(){
        return view('inicio_empleado');

        // $empleos = Empleo::all(); // Obtén los empleos desde la base de datos
        // return view('inicio_empleado', compact('empleos'));    }
}
}