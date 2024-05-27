<?php

class home_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findData($usia, $tahunOrBulan, $status, $tabelke)
    {
        $query = "SELECT g$tabelke.* FROM kelompok_umur ku 
                    JOIN gizi$tabelke g$tabelke ON ku.gizi$tabelke = g$tabelke.id_gizi$tabelke 
                    WHERE ku.batas_awal <= $usia 
                    AND ku.batas_akhir >= $usia
                    AND ku.bulan_tahun = '$tahunOrBulan' 
                    AND ku.status = '$status'";

        $this->db->query($query);
        $datas = $this->db->resultSet();
        $data = array_shift($datas);
        return $data;
    }

    function sumArray($array1, $array2)
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
