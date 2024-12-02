<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Curso;

class AlumnosCursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumnos = Alumno::all();
        $cursos = Curso::all();

        $alumnos->each(function ($alumno) use ($cursos) {
            $alumno->cursos()->attach(
                $cursos->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
