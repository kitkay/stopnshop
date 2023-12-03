<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'capital' => fake()->randomFloat(2, 10, 50),
            'markup' => fake()->randomFloat(2, 10, 50),
            'discount' => fake()->randomFloat(2, 10, 50)
        ];
    }
}
