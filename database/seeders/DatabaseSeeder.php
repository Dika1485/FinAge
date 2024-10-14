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
        $this->call(PemasukanSeeder::class);
        $this->call(PengeluaranSeeder::class);
        $this->call(Kategori_transaksiSeeder::class);
        $this->call(SaldoSeeder::class);
        $this->call(InvestasiSeeder::class);
        $this->call(Hutang_piutangSeeder::class);
        $this->call(AnggaranSeeder::class);
        $this->call(Laporan_bulananSeeder::class);
        $this->call(Catatan_transaksiSeeder::class);
        $this->call(Mata_uangSeeder::class);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
