<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anuncio>
 */
class AnuncioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'usuario_id' => $this->faker->numberBetween(1, 10),
            'categoria_id' => $this->faker->numberBetween(1, 10),
            'subcategoria_id' => $this->faker->numberBetween(1, 10),
            'nombre' => $this->faker->text(50),
            'precio' => $this->faker->numberBetween(1, 10),
            'forma_contacto' =>  $this->faker->text(20),
            'fecha_publicacion' => '2022/04/28',
            'descripcion' => $this->faker->text(200),

        ];
    }
}
