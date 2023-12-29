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
            'product_id' => DB::table('products')->inRandomOrder()->value('id'),
            'price_id' => DB::table('prices')->inRandomOrder()->value('id'),
            'staff_id' => DB::table('users')->inRandomOrder()->value('id'),
            'description' => fake()->sentence(),
        ];
    }
}
