<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
Route::get('/',HomeController::class);
Route::get('/cursos',[CursoController::class, 'index']);
Route::get('/cursos/create',[CursoController::class, 'create']);
Route::get('/cursos/{curso}',[CursoController::class, 'show']);
Route::get('/cursos/{curso}/{año}',[CursoController::class, 'show']);
Route::get('/cursos/{curso}/{año}',[CursoController::class, 'showAñoCurso']);
/*
Route::get('/cursos/create', function () {
    return "Creacion del curso";
});
Route::get('/cursos/{curso}', function ($curso) {
    return "Este es el curso: $curso";
});
Route::get('cursos', function () {
    return "Curso: ___";
});
Route::get('cursos/{curso}', function ($curso) {
    return "Curso: $curso";
});
Route::get('cursos/{curso}/{año?}/', function ($curso,$año = null) {
    if ($año) {
        return "Curso: $curso año $año";
    } else {
        return "Curso: $curso";
    }
});
*/