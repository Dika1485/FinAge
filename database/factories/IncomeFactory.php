<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "source"=> $this->faker->word(),
            "amount"=> $this->faker->randomNumber(),
            "frequency"=> $this->faker->numberBetween(1,10),
        ];
    }
}
