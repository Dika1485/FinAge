<?php

namespace Database\Seeders;

use App\Models\DebtCredit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DebtCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DebtCredit::factory()->count(10)->create();
    }
}
