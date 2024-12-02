<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory; // Esta línea es importante
    protected $table = 'alumnos';
    protected $fillable = ['nombre_ape', 'edad', 'telefono', 'direccion'];
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'alumnos_cursos', 'alumno_id', 'curso_id');
    }
public function obtenerAlumnos(){
    return Alumno::all();
}
public function obtenerAlumno($id){
    return Alumno::find($id);
}
}