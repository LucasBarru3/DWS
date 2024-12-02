<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curso extends Model
{
    use HasFactory;
    //Indicar la tabla associada
    protected $table = 'cursos';
    //Indicar los campos que se pueden modificar
    protected $fillable = ['nombre', 'nivel', 'horasAcademicas', 'profesor_id'];
    //Indicar la relacion con el modelo Profesor
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'profesor_id');
    }
    public function alumno()
    {
        return $this->belongsToMany(Alumno::class, 'alumnos_cursos', 'curso_id', 'alumno_id');
    }
}