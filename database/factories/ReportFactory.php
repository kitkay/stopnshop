<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sale_serial' => DB::table('sales')->inRandomOrder()->value('serial'),
            'staff_id' => DB::table('users')->inRandomOrder()->value('id'),
            'reportName' => fake()->randomElement(['ReportOne', 'ReportTwo', 'ReportThree']),
            'description' => fake()->sentence(),
            'totalSales' => fake()->randomDigit()
        ];
    }
}
