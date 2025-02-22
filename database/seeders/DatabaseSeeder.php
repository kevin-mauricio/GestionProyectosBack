<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CompaniaSeeder::class);
        $this->call(ProyectoSeeder::class);
        $this->call(HistoriaUsuarioSeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(UserSeeder::class);
    }
}
