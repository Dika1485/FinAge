<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hutang_piutang>
 */
class Hutang_piutangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "person"=> $this->faker->name(),
            "amount"=> $this->faker->randomNumber(),
            "status"=> $this->faker->randomElement(['pending', 'completed']),
        ];
    }
}
