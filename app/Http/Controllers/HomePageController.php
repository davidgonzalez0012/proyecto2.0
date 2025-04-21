<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class HomePageController extends Controller
{

    public function  iniciopagina()
    {

        return view('inicio');
    }
   
}