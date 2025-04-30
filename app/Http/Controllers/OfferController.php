<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;
class OfferController extends Controller
{


    public function publicar()
    {
        return view('publicar_empleo');
    }

    public function publicar_empleos(Request $request){

        $offer = new Offer();
        $offer ->  empleador_id = auth::user()->id;
        $offer -> titulo = $request -> titulo;
        $offer -> categoria = $request -> categoria;
        $offer -> tipo_contrato = $request -> tipo_contrato;
        $offer -> duracion_contrato = $request -> duracion_contrato;
        $offer -> salario = $request -> salario;
        $offer -> descripcion = $request -> descripcion;
        $offer -> educacion = $request -> educacion;
        $offer -> experiencia = $request -> experiencia;
        $offer -> contacto_nombre = $request -> contacto_nombre;
        $offer -> contacto_correo = $request -> contacto_correo;
        $offer -> ciudad = $request -> ciudad;
        $offer -> modalidad = $request -> modalidad;
        $offer -> habilidades = $request -> habilidades;

        $offer->save();



        return redirect()->route('empleador');

    }


    public function ver(){
        return view('mis_publicaciones');
    }

    public function todas_publicaciones()
    {
        $ofertas = Offer::all();
        return view('mis_publicaciones', compact('ofertas'));
    }
}
