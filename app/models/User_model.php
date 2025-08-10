<?php

class User_model
{
    private $nama = "Salman";
    private $pekerjaan = "Programmer";

    public function getUser()
    {
        return  [
            'nama' => $this->nama,
            'pekerjaan' => $this->pekerjaan
        ];
    }
}
