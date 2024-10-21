<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $this->call(BalanceSeeder::class);
        $this->call(BudgetSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(DebtCreditSeeder::class);
        $this->call(ExpenseSeeder::class);
        $this->call(IncomeSeeder::class);
        $this->call(InvestmentSeeder::class);
        $this->call(MonthlyReportSeeder::class);
        $this->call(TransactionCategorySeeder::class);
        $this->call(TransactionNoteSeeder::class);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
