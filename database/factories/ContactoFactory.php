<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
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
            'contacto_emisor' => $this->faker->text(20),
            'contenido' =>  $this->faker->text(200),
        ];
    }
}
