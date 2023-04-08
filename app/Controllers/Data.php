<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MData;

class Data extends BaseController
{
    public function __construct()
    {
        $this->tbl_zakat = new MData;
        $session = \Config\Services::session();
    }
    public function index()
    {
        $session = session();
        if($session->get('logged_in') != 1){
            return redirect()->to('login');
        }

        $data = $this->tbl_zakat->getData();
        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        return view ('V_showData',$array);
    }
  
    public function insertData()
    {
        $session = session();
        if($session->get('logged_in') != 1){
            return redirect()->to('login');
        }
        return view('V_insertData');
    }
    public function saveData()
    {
        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jns_zakat' => $this->request->getVar('jns_zakat'),
            'jml_zakat' => $this->request->getVar('jml_zakat'),

        ];
        $insert = $this->tbl_zakat->saveData($data);   
        return redirect()->to('Data');   
    }
    public function editData($id)
    {
        $selectdata = $this->tbl_zakat->getSelectData($id);
        $array = [
           'data' =>$selectdata,
        ];
        return view('V_editData',$array);
    }
    public function saveEditData($id)
    {
        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jns_zakat' => $this->request->getVar('jns_zakat'),
            'jml_zakat' => $this->request->getVar('jml_zakat'),

        ];
        $update = $this->tbl_zakat->saveEditData($data,$id);   
        return redirect()->to('Data');
           
    }
    public function hapusData($id)
    {
        $deletedata = $this->tbl_zakat->hapusData($id);
        return redirect()->to('Data');
    }
    
}
