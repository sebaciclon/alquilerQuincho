<?php

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// RUTAS DE ALQUILERES
Route::controller(AlquilerController::class)->middleware('auth')->group(function(){
    Route::get('alquileres','index')->name('alquileres');
    Route::get('alquileres/buscar-nombre','indexBuscar')->name('buscar-alquileres');
    Route::get('alquileres/buscar-fecha','indexBuscarFecha')->name('buscar-fecha-disponible');
    Route::get('alquiler/create','create')->name('crear-alquiler');
    Route::post('alquiler/store','store')->name('guardar-alquiler');
    Route::get('alquiler/show/{id}','show')->name('mostrar-alquiler');
    Route::post('alquiler/update','update')->name('actualizar-alquiler');
    Route::get('alquiler/destroy/{id}','destroy')->name('eliminar-alquiler');
});

// RUTA DE USUARIO
Route::controller(UsuarioController::class)->middleware('auth')->group(function(){
    Route::get('usuarios','index')->name('usuarios');
    Route::get('usuario/create','create')->name('usuario-crear');
    Route::post('usuario/guardar','store')->name('usuarios-guardar');
    //Route::get('usuario/mostrar/{id}','show')->name('usuarios-mostrar');
    Route::get('usuario/editar/{id}','edit')->name('usuarios-editar');
    Route::post('usuario/actualizar-perfil','updateFace')->name('usuarios-actualizar-perfil');
    Route::post('usuario/actualizar','update')->name('usuarios-actualizar');
    Route::get('usuario/eliminar/{id}','destroy')->name('usuarios-eliminar');
});

require __DIR__.'/auth.php';
