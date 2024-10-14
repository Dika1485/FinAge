<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catatan_transaksi>
 */
class Catatan_transaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "detail"=> $this->faker->text(),
            "amount"=> $this->faker->randomNumber(),
            "category"=> $this->faker->word(),
        ];
    }
}
