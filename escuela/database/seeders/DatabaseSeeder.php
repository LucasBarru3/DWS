<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Profesor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Alumno::factory(25)->create();
        Profesor::factory(10)->create();
        Curso::factory(20)->create();
        $this->call([
            AlumnosCursosSeeder::class,
        ]);
        //Curso::factory(10)->create();
        // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
