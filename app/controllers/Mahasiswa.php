<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $data['page'] = 'Daftar Mahasiswa';
        $this->view('partials/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('partials/footer',);
    }

    public function detail($id)
    {
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $data['page'] = 'Detail Mahasiswa';
        $this->view('partials/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('partials/footer',);
    }

    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            header("Location:" . BASEURL . "mahasiswa");
            exit;
        }
    }
}
