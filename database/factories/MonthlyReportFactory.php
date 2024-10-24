<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MonthlyReport>
 */
class MonthlyReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "month"=> $this->faker->monthName(),
            "income"=> $this->faker->randomNumber(),
            "expense"=> $this->faker->randomNumber(),
        ];
    }
}
