<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MDataMal;

class DataMal extends BaseController
{
    public function __construct()
    {
        $this->tbl_zakatmal = new MDataMal;
        $session = \Config\Services::session();
    }
    public function index()
    {
        $session = session();
        if($session->get('logged_in') != 1){
            return redirect()->to('login');
        }

        $data = $this->tbl_zakatmal->getDataMal();
        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        return view ('V_showDataMal',$array);
    }
  
    public function insertDataMal()
    {
        $session = session();
        if($session->get('logged_in') != 1){
            return redirect()->to('login');
        }
        return view('V_insertDataMal');
    }
    public function saveDataMal()
    {
        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jml_hasil' => $this->request->getVar('jml_hasil'),
            'jml_zakat' => $this->request->getVar('jml_zakat'),

        ];
        $insert = $this->tbl_zakatmal->saveDataMal($data);   
        return redirect()->to('Datamal');   
    }
    public function editDataMal($id)
    {
        $selectdata = $this->tbl_zakatmal->getSelectDataMal($id);
        $array = [
           'datamal' =>$selectdata,
        ];
        return view('V_editDataMal',$array);
    }
    public function saveEditDataMal($id)
    {
        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jml_hasil' => $this->request->getVar('jml_hasil'),
            'jml_zakat' => $this->request->getVar('jml_zakat'),

        ];
        $update = $this->tbl_zakatmal->saveEditDataMal($data,$id);   
        return redirect()->to('Datamal');
           
    }
    public function hapusDataMal($id)
    {
        $deletedata = $this->tbl_zakatmal->hapusDataMal($id);
        return redirect()->to('Datamal');
    }
}

