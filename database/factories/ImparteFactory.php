<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Clase;
use App\Models\Aula;
use App\Models\Profesor;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imparte>
 */
class ImparteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'codclase' => Clase::all()->random()->codclase,
            'id_aula' => Aula::all()->random()->id,
            'id_profesor' => Profesor::all()->random()->id

        ];
    }
}
