<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $data['page'] = 'Mahasiswa';
        $this->view('partials/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('partials/footer',);
    }
}
