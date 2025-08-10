<?php

class About extends Controller
{
    public function index()
    {
        $data = $this->model('User_model')->getUser();
        $data['page'] = "About me";
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
