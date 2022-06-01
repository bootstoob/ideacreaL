<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Img_anuncio>
 */
class Imgs_anuncioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //TODO
            'imagen_id' => $this->faker->numberBetween(1, 10),
            'anuncio_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
