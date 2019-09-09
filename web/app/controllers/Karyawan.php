<?php 

class Karyawan extends Controller {
    public function index()
    {
        $data['judul'] = 'Karyawan';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('karyawan/index', $data);
    }
    public function daftarkaryawan(){
        $num_rec = 10;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        };
        $start_from = ($page - 1) * $num_rec;
        echo json_encode($this->model('Karyawan_model')->getKaryawan($start_from, $num_rec));
    }
    public function tambah(){
        if( $this->model('Karyawan_model')->tambahDataKaryawan($_POST) > 0 ) {
            echo json_encode($data, JSON_PRETTY_PRINT);
            exit;
        } else {
            //Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            //header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}