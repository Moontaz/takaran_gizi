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
        $this->call(Gizi1Seeder::class);
        $this->call(Gizi3Seeder::class);
        $this->call(Gizi2Seeder::class);
        $this->call(KelompokUmurSeeder::class);
    }
}
