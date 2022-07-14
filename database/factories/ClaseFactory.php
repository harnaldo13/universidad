<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clase>
 */
class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'codclase' => $this->faker->numberBetween(0,999),
            'nombre' => $this->faker->randomElement(['Algebra','Diseño Graf','Programacion','Comunicacion']),
            'credito' => $this->faker->numberBetween(1,3)

        ];
    }
}
