<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategoria>
 */
class SubcategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'categoria_id' => $this->faker->numberBetween(1, 10),
            'nombre_subcategoria' => $this->faker->text(20), 
            'descripcion' => $this->faker->text(100),
        ];
    }
}
