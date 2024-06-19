<?php

namespace App\Http\Controllers;

use App\Models\KelompokUmur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function find(Request $request)
    {
        if ($request->has('usia') && $request->has('tahunOrBulan') && $request->has('gender')) {
            $usia = intval($request->usia);
            $tahunOrBulan = $request->tahunOrBulan;
            $status = $request->gender;
            if (($tahunOrBulan == 'bulan' && $usia >= 0 && $usia <= 11) || ($tahunOrBulan == 'tahun' && $usia >= 1 && $usia <= 9)) {
                $status = "bayi";
            }
            $tabel1 = KelompokUmur::with('gizi1')->where('batas_awal', '<=', $usia)
                ->where('batas_akhir', '>=', $usia)
                ->where('bulan_tahun', $tahunOrBulan)
                ->where('status', $status)
                ->first();
            $tabel2 = KelompokUmur::with('gizi2')->where('batas_awal', '<=', $usia)
                ->where('batas_akhir', '>=', $usia)
                ->where('bulan_tahun', $tahunOrBulan)
                ->where('status', $status)
                ->first();
            $tabel3 = KelompokUmur::with('gizi3')->where('batas_awal', '<=', $usia)
                ->where('batas_akhir', '>=', $usia)
                ->where('bulan_tahun', $tahunOrBulan)
                ->where('status', $status)
                ->first();
            if ($request->has('umur')) {
                $hamilMenyusui = $request->hamilMenyusui;
                $umur = intval($request->umur);
                $tabel4 = KelompokUmur::with('gizi1')->where('batas_awal', '<=', $umur)
                    ->where('batas_akhir', '>=', $umur)
                    ->where('bulan_tahun', 'bulan')
                    ->where('status', $hamilMenyusui)
                    ->first();
                $tabel5 = KelompokUmur::with('gizi2')->where('batas_awal', '<=', $umur)
                    ->where('batas_akhir', '>=', $umur)
                    ->where('bulan_tahun', 'bulan')
                    ->where('status', $hamilMenyusui)
                    ->first();
                $tabel6 = KelompokUmur::with('gizi3')->where('batas_awal', '<=', $umur)
                    ->where('batas_akhir', '>=', $umur)
                    ->where('bulan_tahun', 'bulan')
                    ->where('status', $hamilMenyusui)
                    ->first();

                $resultTabel1 = $this->sumArray($tabel1 ? $tabel1->gizi1->toArray() : [], $tabel4 ? $tabel4->gizi1->toArray() : []);
                $resultTabel2 = $this->sumArray($tabel2 ? $tabel2->gizi2->toArray() : [], $tabel5 ? $tabel5->gizi2->toArray() : []);
                $resultTabel3 = $this->sumArray($tabel3 ? $tabel3->gizi3->toArray() : [], $tabel6 ? $tabel6->gizi3->toArray() : []);

                $responseData = ["tabel1" => $resultTabel1, "tabel2" => $resultTabel2, "tabel3" => $resultTabel3];
            } else {
                // Jika parameter `umur` tidak ada, gunakan data yang diambil
                $responseData = [
                    "tabel1" => $tabel1 ? $tabel1->gizi1->toArray() : [],
                    "tabel2" => $tabel2 ? $tabel2->gizi2->toArray() : [],
                    "tabel3" => $tabel3 ? $tabel3->gizi3->toArray() : [],
                ];
            }

            header('Content-Type: application/json');

            echo json_encode($responseData);
            exit();
        }
    }

    public function sumArray($array1, $array2)
    {
        $resultArray = [];

        foreach ($array1 as $key => $value) {
            $resultArray[$key] = $value;
        }

        foreach ($array2 as $key => $value) {
            if (array_key_exists($key, $resultArray)) {
                $resultArray[$key] += $value;
            } else {
                $resultArray[$key] = $value;
            }
        }

        return $resultArray;
    }
}
