<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class contactosController extends Controller
{
    public function mostrarContactos($codigo){
        $registro = Directorio::find($codigo);
        return view('vercontactos',compact('registro'));
    }
}
