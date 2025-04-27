<?php

namespace App\Http\Controllers;
use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    //
    public function inicio_administrador()
    {
        return view('inicio_administrador');
    }
}
