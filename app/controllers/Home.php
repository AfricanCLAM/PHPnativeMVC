<?php

class Home extends Controller
{
    public function index()
    {
        $data['page'] = 'Home';
        $this->view('partials/header', $data);
        $this->view('home/index');
        $this->view('partials/footer');
    }
}
