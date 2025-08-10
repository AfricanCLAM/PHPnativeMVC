<?php

class About
{
    public function index($nama = "Salman", $pekerjaan = "Programmer")
    {
        echo "Hai,Nama saya $nama, Saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo "About/index";
    }
}
