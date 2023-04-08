<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Test extends BaseController
{
    public function index()
    {
        return view('halaman1');
    }
    public function data()
    {
        $nim = $this->request->getVar('nim');
        $namkita = $this->request->getVar('nama');
        $fakultas = $this->request->getVar('fakultas');
        $alamat = $this->request->getVar('alamat');
        echo $nim;
        echo"<br>";
        echo $namkita;
        echo"<br>";
        echo $fakultas;
        echo"<br>";
        echo $alamat;
    }
}
