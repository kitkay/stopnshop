<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
    public function definition(): array
    {
        return [
            'category_id' => DB::table('categories')->inRandomOrder()->value('id'),
            'staff_id' => DB::table('users')->inRandomOrder()->value('id'),
            'price_id' => DB::table('prices')->inRandomOrder()->value('id'),
            'sku' => fake()->regexify('[A-Z]{3}[0-4]{2}'),
            'productName' => fake()->unique()->word(),
            'description' => fake()->sentence(),
            'unit' => fake()->randomElement(['pc', 'box']),
            'quantity' => fake()->randomDigit()
        ];
    }
}