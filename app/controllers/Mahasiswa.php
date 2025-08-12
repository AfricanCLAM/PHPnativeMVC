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

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header("Location:" . BASEURL . "mahasiswa");
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header("Location:" . BASEURL . "mahasiswa");
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header("Location:" . BASEURL . "mahasiswa");
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header("Location:" . BASEURL . "mahasiswa");
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }
    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header("Location:" . BASEURL . "mahasiswa");
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header("Location:" . BASEURL . "mahasiswa");
            exit;
        }
    }

    public function cari()
    {
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $data['page'] = 'Daftar Mahasiswa';
        $this->view('partials/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('partials/footer',);
    }
}
