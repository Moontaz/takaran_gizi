<?php

namespace Database\Seeders;

use App\Models\Gizi1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Gizi1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gizi1::insert([
            ['id_gizi1' => 1, 'energi' => 550, 'protein' => 9, 'total_lemak' => 31, 'omega3' => 0, 'omega6' => 4, 'karbohidrat' => 59, 'serat' => 0, 'air' => 700],
            ['id_gizi1' => 2, 'energi' => 800, 'protein' => 15, 'total_lemak' => 35, 'omega3' => 0, 'omega6' => 4, 'karbohidrat' => 105, 'serat' => 11, 'air' => 900],
            ['id_gizi1' => 3, 'energi' => 1350, 'protein' => 20, 'total_lemak' => 45, 'omega3' => 0, 'omega6' => 7, 'karbohidrat' => 215, 'serat' => 19, 'air' => 1150],
            ['id_gizi1' => 4, 'energi' => 1400, 'protein' => 25, 'total_lemak' => 50, 'omega3' => 0, 'omega6' => 10, 'karbohidrat' => 220, 'serat' => 20, 'air' => 1450],
            ['id_gizi1' => 5, 'energi' => 1650, 'protein' => 40, 'total_lemak' => 55, 'omega3' => 0, 'omega6' => 10, 'karbohidrat' => 250, 'serat' => 23, 'air' => 1650],
            ['id_gizi1' => 6, 'energi' => 2000, 'protein' => 50, 'total_lemak' => 65, 'omega3' => 1, 'omega6' => 12, 'karbohidrat' => 300, 'serat' => 28, 'air' => 1850],
            ['id_gizi1' => 7, 'energi' => 2400, 'protein' => 70, 'total_lemak' => 80, 'omega3' => 1, 'omega6' => 16, 'karbohidrat' => 350, 'serat' => 34, 'air' => 2100],
            ['id_gizi1' => 8, 'energi' => 2650, 'protein' => 75, 'total_lemak' => 85, 'omega3' => 1, 'omega6' => 16, 'karbohidrat' => 400, 'serat' => 37, 'air' => 2300],
            ['id_gizi1' => 9, 'energi' => 2650, 'protein' => 65, 'total_lemak' => 75, 'omega3' => 1, 'omega6' => 17, 'karbohidrat' => 430, 'serat' => 37, 'air' => 2500],
            ['id_gizi1' => 10, 'energi' => 2550, 'protein' => 65, 'total_lemak' => 70, 'omega3' => 1, 'omega6' => 17, 'karbohidrat' => 415, 'serat' => 36, 'air' => 2500],
            ['id_gizi1' => 11, 'energi' => 2150, 'protein' => 65, 'total_lemak' => 60, 'omega3' => 1, 'omega6' => 14, 'karbohidrat' => 340, 'serat' => 30, 'air' => 2500],
            ['id_gizi1' => 12, 'energi' => 1800, 'protein' => 64, 'total_lemak' => 50, 'omega3' => 1, 'omega6' => 14, 'karbohidrat' => 275, 'serat' => 25, 'air' => 1800],
            ['id_gizi1' => 13, 'energi' => 1600, 'protein' => 64, 'total_lemak' => 45, 'omega3' => 1, 'omega6' => 14, 'karbohidrat' => 235, 'serat' => 22, 'air' => 1600],
            ['id_gizi1' => 14, 'energi' => 1900, 'protein' => 55, 'total_lemak' => 65, 'omega3' => 1, 'omega6' => 10, 'karbohidrat' => 280, 'serat' => 27, 'air' => 1850],
            ['id_gizi1' => 15, 'energi' => 2050, 'protein' => 65, 'total_lemak' => 70, 'omega3' => 1, 'omega6' => 11, 'karbohidrat' => 300, 'serat' => 29, 'air' => 2100],
            ['id_gizi1' => 16, 'energi' => 2100, 'protein' => 65, 'total_lemak' => 70, 'omega3' => 1, 'omega6' => 11, 'karbohidrat' => 300, 'serat' => 29, 'air' => 2150],
            ['id_gizi1' => 17, 'energi' => 2250, 'protein' => 60, 'total_lemak' => 65, 'omega3' => 1, 'omega6' => 12, 'karbohidrat' => 360, 'serat' => 32, 'air' => 2350],
            ['id_gizi1' => 18, 'energi' => 2150, 'protein' => 60, 'total_lemak' => 60, 'omega3' => 1, 'omega6' => 12, 'karbohidrat' => 340, 'serat' => 30, 'air' => 2350],
            ['id_gizi1' => 19, 'energi' => 1800, 'protein' => 60, 'total_lemak' => 50, 'omega3' => 1, 'omega6' => 11, 'karbohidrat' => 280, 'serat' => 25, 'air' => 2350],
            ['id_gizi1' => 20, 'energi' => 1550, 'protein' => 58, 'total_lemak' => 45, 'omega3' => 1, 'omega6' => 11, 'karbohidrat' => 230, 'serat' => 22, 'air' => 1550],
            ['id_gizi1' => 21, 'energi' => 1400, 'protein' => 58, 'total_lemak' => 40, 'omega3' => 1, 'omega6' => 11, 'karbohidrat' => 200, 'serat' => 20, 'air' => 1400],
            ['id_gizi1' => 22, 'energi' => 180, 'protein' => 1, 'total_lemak' => 2, 'omega3' => 0, 'omega6' => 2, 'karbohidrat' => 25, 'serat' => 3, 'air' => 300],
            ['id_gizi1' => 23, 'energi' => 300, 'protein' => 10, 'total_lemak' => 2, 'omega3' => 0, 'omega6' => 2, 'karbohidrat' => 40, 'serat' => 4, 'air' => 300],
            ['id_gizi1' => 24, 'energi' => 300, 'protein' => 30, 'total_lemak' => 2, 'omega3' => 0, 'omega6' => 2, 'karbohidrat' => 40, 'serat' => 4, 'air' => 300],
            ['id_gizi1' => 25, 'energi' => 330, 'protein' => 20, 'total_lemak' => 2, 'omega3' => 0, 'omega6' => 2, 'karbohidrat' => 45, 'serat' => 5, 'air' => 800],
            ['id_gizi1' => 26, 'energi' => 400, 'protein' => 15, 'total_lemak' => 2, 'omega3' => 0, 'omega6' => 2, 'karbohidrat' => 55, 'serat' => 6, 'air' => 650],
        ]);
    }
}
