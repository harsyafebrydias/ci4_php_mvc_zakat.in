<?php

namespace App\Models;

use CodeIgniter\Model;

class MData extends Model
{
    public function getData()
    {
        $query = $this->db->query("select * from tbl_zakat");
        return $query->getResult();
    } 
    public function saveData($data)
    {
        $query = $this->db->table('tbl_zakat')->insert($data);
        return $query;
    }   
    public function getSelectData($id)
    {
        $query = $this->db->query("select * from tbl_zakat where nik = $id");
        return $query->getResult();
    }
    public function saveEditData($data,$id)
    {
        $query = $this->db->table('tbl_zakat')
        ->where('nik',$id)
        ->update($data);
        return $query;
    } 
    public function hapusData($id)
    {
        $query = $this->db->table('tbl_zakat')
        ->where('nik',$id)
        ->delete();
        return $query;
    } 
}
