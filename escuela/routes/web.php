<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;

Route::get('/', function () { return view('index');})->name('inicio');
Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos');
Route::get('alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('alumnos/store', [AlumnoController::class, 'store'])->name('guardar');
Route::get('alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('edit');
Route::get('alumnos/{alumno}/confirmar', [AlumnoController::class, 'confirmar'])->name('alumnos.confirmar');
Route::delete('alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::put('alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('alumnos/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::get('profesors', [ProfesorController::class, 'index'])->name('profesors');
Route::get('profesors/create', [ProfesorController::class, 'create'])->name('profesors.create');
Route::post('profesors/store', [ProfesorController::class, 'store'])->name('profesors.guardar');
Route::get('profesors/{profesor}/confirmar', [ProfesorController::class, 'confirmar'])->name('profesors.confirmar');
Route::delete('profesors/{profesor}', [ProfesorController::class, 'destroy'])->name('profesors.destroy');



