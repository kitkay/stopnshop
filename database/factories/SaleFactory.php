<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'serial' => fake()->bothify('##???##???'),
            'product_id' => DB::table('products')->inRandomOrder()->value('id'),
            'quantity' => fake()->randomDigit(),
            'amount' => fake()->randomFloat(2, 10, 50)
        ];
    }
}
