<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_ape' => $this->faker->name(),
            'edad' => $this->faker->numberBetween(18, 25),
            'telefono' => $this->faker->phoneNumber(),  
            'direccion' => $this->faker->address(),
        ];
    }
}
