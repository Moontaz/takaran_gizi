<?php
class home extends Controller
{
    public function index()
    {
        $this->view('home/index');
    }

    public function find()
    {
        if (isset($_POST['usia']) && isset($_POST['tahunOrBulan']) && isset($_POST['gender'])) {
            $usia = intval($_POST['usia']);
            $tahunOrBulan = $_POST['tahunOrBulan'];
            $status = $_POST['gender'];
            if (($tahunOrBulan == 'bulan' && $usia >= 0 && $usia <= 11) || ($tahunOrBulan == 'tahun' && $usia >= 1 && $usia <= 9)) {
                $status = "bayi";
            }
            $tabel1 = $this->model('home_model')->findData($usia, $tahunOrBulan, $status, 1);
            $tabel2 = $this->model('home_model')->findData($usia, $tahunOrBulan, $status, 2);
            $tabel3 = $this->model('home_model')->findData($usia, $tahunOrBulan, $status, 3);
            if (isset($_POST['umur'])) {
                $hamilMenyusui = $_POST['hamilMenyusui'];
                $umur = intval($_POST['umur']);
                $tabel4 = $this->model('home_model')->findData($umur, "bulan", $hamilMenyusui, 1);
                $tabel5 = $this->model('home_model')->findData($umur, "bulan", $hamilMenyusui, 2);
                $tabel6 = $this->model('home_model')->findData($umur, "bulan", $hamilMenyusui, 3);
                $resultTabel1 = $this->model('home_model')->sumArray($tabel1, $tabel4);
                $resultTabel2 = $this->model('home_model')->sumArray($tabel2, $tabel5);
                $resultTabel3 = $this->model('home_model')->sumArray($tabel3, $tabel6);
                $responseData = ["tabel1" => $resultTabel1, "tabel2" => $resultTabel2, "tabel3" => $resultTabel3];
            } else {
                $responseData = ["tabel1" => $tabel1, "tabel2" => $tabel2, "tabel3" => $tabel3];
            }

            header('Content-Type: application/json');

            // Output JSON encoded response
            echo json_encode($responseData);
            exit();
        }
    }

    public function back()
    {
        if (isset($_SESSION['data'])) {
            session_destroy();
            header('Location: ' . BASEURL . '/home');
            exit();
        }
    }
}
