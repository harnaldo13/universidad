<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'id' => $this->faker->numberBetween(0,999),
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastname(),
            'titulo' => $this->faker->randomElement(['LIC','ING','MSC','DOC'])

        ];
    }
}
