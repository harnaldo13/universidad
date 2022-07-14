<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aula>
 */
class AulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'nombre' => $this->faker->randomElement(['CISCO','LAB 1','LAB 2','ACAILA']),
            'ubicacion' => $this->faker->address()
            
        ];
    }
}
