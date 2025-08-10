<?php

class About extends Controller
{
    public function index($nama = "Salman", $pekerjaan = "Programmer")
    {
        $data = [
            'page' => 'About me',
            'nama' => $nama,
            'pekerjaan' => $pekerjaan,
        ];
        $this->view('partials/header', $data);
        $this->view('about/index', $data);
        $this->view('partials/footer');
    }

    public function page()
    {
        $data['page'] = 'About Page';
        $this->view('partials/header',$data);
        $this->view('about/page');
        $this->view('partials/footer');
    }
}
