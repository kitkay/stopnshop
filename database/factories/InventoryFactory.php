<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->regexify('[A-Z]{3}[0-4]{1}[A-Z]{1}'),
            'product_id' => DB::table('products')->inRandomOrder()->value('id'),
            'staff_id' => DB::table('users')->inRandomOrder()->value('id'),
            'description' => fake()->sentence(),
        ];
    }
}