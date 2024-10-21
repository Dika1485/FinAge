<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "budget_item"=> $this->faker->word,
            "allocated"=> $this->faker->numberBetween(1,10),
            "spent"=> $this->faker->randomNumber(),
        ];
    }
}
