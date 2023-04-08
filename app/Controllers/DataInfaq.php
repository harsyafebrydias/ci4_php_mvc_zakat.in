<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MDataInfaq;

class DataInfaq extends BaseController
{
    public function __construct()
    {
        $this->tbl_infaq = new MDataInfaq;
        $session = \Config\Services::session();
    }
    public function index()
    {
        $session = session();
        if($session->get('logged_in') != 1){
            return redirect()->to('login');
        }

        $data = $this->tbl_infaq->getDataInfaq();
        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        return view ('V_showDataInfaq',$array);
    }
  
    public function insertDataInfaq()
    {
        $session = session();
        if($session->get('logged_in') != 1){
            return redirect()->to('login');
        }
        return view('V_insertDataInfaq');
    }
    public function saveDataInfaq()
    {
        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jml_infaq' => $this->request->getVar('jml_infaq'),

        ];
        $insert = $this->tbl_infaq->saveDataInfaq($data);   
        return redirect()->to('DataInfaq');   
    }
    public function editDataInfaq($id)
    {
        $selectdata = $this->tbl_infaq->getSelectDataInfaq($id);
        $array = [
           'dataInfaq' =>$selectdata,
        ];
        return view('V_editDataInfaq',$array);
    }
    public function saveEditDataInfaq($id)
    {
        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jml_infaq' => $this->request->getVar('jml_infaq'),

        ];
        $update = $this->tbl_infaq->saveEditDataInfaq($data,$id);   
        return redirect()->to('DataInfaq');
           
    }
    public function hapusDataInfaq($id)
    {
        $deletedata = $this->tbl_infaq->hapusDataInfaq($id);
        return redirect()->to('DataInfaq');
    }
}
