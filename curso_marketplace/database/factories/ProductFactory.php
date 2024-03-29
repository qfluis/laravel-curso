<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Código añadido por Luis
            'name'=> $this->faker->sentence(2),
            'description'=> $this->faker->sentence(20),
            'price'=> $this->faker->numberBetween(100,2000),
            // -------------------
        ];
    }
}
