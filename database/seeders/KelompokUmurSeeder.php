<?php

namespace Database\Seeders;

use App\Models\KelompokUmur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelompokUmurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KelompokUmur::insert([
            ['id_kel' => 1, 'batas_awal' => 0, 'batas_akhir' => 5, 'bulan_tahun' => 'bulan', 'status' => 'bayi', 'id_gizi1' => 1, 'id_gizi2' => 1, 'id_gizi3' => 1],
            ['id_kel' => 2, 'batas_awal' => 6, 'batas_akhir' => 11, 'bulan_tahun' => 'bulan', 'status' => 'bayi', 'id_gizi1' => 2, 'id_gizi2' => 2, 'id_gizi3' => 2],
            ['id_kel' => 3, 'batas_awal' => 1, 'batas_akhir' => 3, 'bulan_tahun' => 'tahun', 'status' => 'bayi', 'id_gizi1' => 3, 'id_gizi2' => 3, 'id_gizi3' => 3],
            ['id_kel' => 4, 'batas_awal' => 4, 'batas_akhir' => 6, 'bulan_tahun' => 'tahun', 'status' => 'bayi', 'id_gizi1' => 4, 'id_gizi2' => 4, 'id_gizi3' => 4],
            ['id_kel' => 5, 'batas_awal' => 7, 'batas_akhir' => 9, 'bulan_tahun' => 'tahun', 'status' => 'bayi', 'id_gizi1' => 5, 'id_gizi2' => 5, 'id_gizi3' => 5],
            ['id_kel' => 6, 'batas_awal' => 10, 'batas_akhir' => 12, 'bulan_tahun' => 'tahun', 'status' => 'laki-laki', 'id_gizi1' => 6, 'id_gizi2' => 6, 'id_gizi3' => 6],
            ['id_kel' => 7, 'batas_awal' => 13, 'batas_akhir' => 15, 'bulan_tahun' => 'tahun', 'status' => 'laki-laki', 'id_gizi1' => 7, 'id_gizi2' => 7, 'id_gizi3' => 7],
            ['id_kel' => 8, 'batas_awal' => 16, 'batas_akhir' => 18, 'bulan_tahun' => 'tahun', 'status' => 'laki-laki', 'id_gizi1' => 8, 'id_gizi2' => 8, 'id_gizi3' => 8],
            ['id_kel' => 9, 'batas_awal' => 19, 'batas_akhir' => 29, 'bulan_tahun' => 'tahun', 'status' => 'laki-laki', 'id_gizi1' => 9, 'id_gizi2' => 9, 'id_gizi3' => 9],
            ['id_kel' => 10, 'batas_awal' => 30, 'batas_akhir' => 49, 'bulan_tahun' => 'tahun', 'status' => 'laki-laki', 'id_gizi1' => 10, 'id_gizi2' => 10, 'id_gizi3' => 10],
            ['id_kel' => 11, 'batas_awal' => 50, 'batas_akhir' => 64, 'bulan_tahun' => 'tahun', 'status' => 'laki-laki', 'id_gizi1' => 11, 'id_gizi2' => 11, 'id_gizi3' => 11],
            ['id_kel' => 12, 'batas_awal' => 65, 'batas_akhir' => 80, 'bulan_tahun' => 'tahun', 'status' => 'laki-laki', 'id_gizi1' => 12, 'id_gizi2' => 12, 'id_gizi3' => 12],
            ['id_kel' => 13, 'batas_awal' => 81, 'batas_akhir' => 130, 'bulan_tahun' => 'tahun', 'status' => 'laki-laki', 'id_gizi1' => 13, 'id_gizi2' => 13, 'id_gizi3' => 13],
            ['id_kel' => 14, 'batas_awal' => 10, 'batas_akhir' => 12, 'bulan_tahun' => 'tahun', 'status' => 'perempuan', 'id_gizi1' => 14, 'id_gizi2' => 14, 'id_gizi3' => 14],
            ['id_kel' => 15, 'batas_awal' => 13, 'batas_akhir' => 15, 'bulan_tahun' => 'tahun', 'status' => 'perempuan', 'id_gizi1' => 15, 'id_gizi2' => 15, 'id_gizi3' => 15],
            ['id_kel' => 16, 'batas_awal' => 16, 'batas_akhir' => 18, 'bulan_tahun' => 'tahun', 'status' => 'perempuan', 'id_gizi1' => 16, 'id_gizi2' => 16, 'id_gizi3' => 16],
            ['id_kel' => 17, 'batas_awal' => 19, 'batas_akhir' => 29, 'bulan_tahun' => 'tahun', 'status' => 'perempuan', 'id_gizi1' => 17, 'id_gizi2' => 17, 'id_gizi3' => 17],
            ['id_kel' => 18, 'batas_awal' => 30, 'batas_akhir' => 49, 'bulan_tahun' => 'tahun', 'status' => 'perempuan', 'id_gizi1' => 18, 'id_gizi2' => 18, 'id_gizi3' => 18],
            ['id_kel' => 19, 'batas_awal' => 50, 'batas_akhir' => 64, 'bulan_tahun' => 'tahun', 'status' => 'perempuan', 'id_gizi1' => 19, 'id_gizi2' => 19, 'id_gizi3' => 19],
            ['id_kel' => 20, 'batas_awal' => 65, 'batas_akhir' => 80, 'bulan_tahun' => 'tahun', 'status' => 'perempuan', 'id_gizi1' => 20, 'id_gizi2' => 20, 'id_gizi3' => 20],
            ['id_kel' => 21, 'batas_awal' => 81, 'batas_akhir' => 130, 'bulan_tahun' => 'tahun', 'status' => 'perempuan', 'id_gizi1' => 21, 'id_gizi2' => 21, 'id_gizi3' => 21],
            ['id_kel' => 22, 'batas_awal' => 1, 'batas_akhir' => 3, 'bulan_tahun' => 'bulan', 'status' => 'hamil', 'id_gizi1' => 22, 'id_gizi2' => 22, 'id_gizi3' => 22],
            ['id_kel' => 23, 'batas_awal' => 4, 'batas_akhir' => 6, 'bulan_tahun' => 'bulan', 'status' => 'hamil', 'id_gizi1' => 23, 'id_gizi2' => 23, 'id_gizi3' => 23],
            ['id_kel' => 24, 'batas_awal' => 7, 'batas_akhir' => 9, 'bulan_tahun' => 'bulan', 'status' => 'hamil', 'id_gizi1' => 24, 'id_gizi2' => 24, 'id_gizi3' => 24],
            ['id_kel' => 25, 'batas_awal' => 1, 'batas_akhir' => 6, 'bulan_tahun' => 'bulan', 'status' => 'menyusui', 'id_gizi1' => 25, 'id_gizi2' => 25, 'id_gizi3' => 25],
            ['id_kel' => 26, 'batas_awal' => 7, 'batas_akhir' => 12, 'bulan_tahun' => 'bulan', 'status' => 'menyusui', 'id_gizi1' => 26, 'id_gizi2' => 26, 'id_gizi3' => 26],
        ]);
    }
}
