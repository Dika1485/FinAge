<?php

namespace Database\Seeders;

use App\Models\TransactionNote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransactionNote::factory()->count(10)->create();
    }
}
