<?php

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\ProfileController;
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

// RUTA DE EXPEDIENTE
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

require __DIR__.'/auth.php';
