<?php

use App\Http\Controllers\contactosController;
use App\Http\Controllers\directorioController;
use Illuminate\Support\Facades\Route;

// ruta para vista de directorio principal
Route::get('/directorio', [directorioController::class, 'mostrarDirectorio'])->name('directorio');

Route::get('/crearEntrada',function(){
    return view('crearEntrada');
})->name('crearEntrada');

Route::post('/crearEntrada/guardar',[directorioController::class, 'guardarRegistro'])->name('nuevaEntrada.guardar');

Route::get('/eliminar/{codigo}',[directorioController::class,'mostrarVistaEliminar'])->name('vista.eliminar.registro');
Route::get('/eliminar/{codigo}/confirmar',[directorioController::class,'mostrarVistaEliminar'])->name('vista.eliminar.registro.confirmar');
Route::get('/buscarEntrada',function (){
    return view('buscar');
});

Route::get('/buscarEntrada/{correo}',[directorioController::class,'buscarEmail'])->name('buscar.email');

Route::get('/verContactos/{codigo}',[contactosController::class,'mostrarContactos'])->name('ver.contactos');
