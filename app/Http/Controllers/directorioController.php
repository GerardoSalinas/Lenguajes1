<?php

namespace App\Http\Controllers;

use App\Models\Directorio as Directorio;
use App\Models\Contacto as Contacto;
use Illuminate\Http\Request;

class directorioController extends Controller
{
    public function mostrarDirectorio(){
        $registros = Directorio::all();
        return view('directorio',compact('registros'));
    }

    public function guardarRegistro(Request $request){
        $registro = new Directorio();
        $registro->codigoEntrada = $request->codigo;
        $registro->nombre = $request->nombre;
        $registro->apellido = $request->apellido;
        $registro->telefono = $request->telefono;
        $registro->correo = $request->correo;
        $registro->save();
        return $this->mostrarDirectorio();
    }

    public function mostrarVistaEliminar($codigo){
        $registro = Directorio::find($codigo);
        return view('eliminar',compact('registro'));
    }


    public function eliminarRegistro($codigo){
        $contactos = Contacto::where('codigoEntrada',$codigo);
        $contactos->delete();
        $registros = Directorio::find('codigoEntrada',$codigo);
        $registros->delete();
        return $this->mostrarDirectorio();
    }
    public function buscarEmail(){

    }
}


// pasos:
// 


