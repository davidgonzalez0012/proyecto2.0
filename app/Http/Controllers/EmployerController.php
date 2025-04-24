<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer; // Assuming you have an Employer model
class EmployerController extends Controller
{
    //
    public function inicio_empleador(){
        return view('inicio_empleador');
    }

 
}
