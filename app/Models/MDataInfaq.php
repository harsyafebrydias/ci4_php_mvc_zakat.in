<?php

namespace App\Models;

use CodeIgniter\Model;

class MDataInfaq extends Model
{
    public function getDataInfaq()
    {
        $query = $this->db->query("select * from tbl_infaq");
        return $query->getResult();
    } 
    public function saveDataInfaq($data)
    {
        $query = $this->db->table('tbl_infaq')->insert($data);
        return $query;
    }   
    public function getSelectDatainfaq($id)
    {
        $query = $this->db->query("select * from tbl_infaq where nik = $id");
        return $query->getResult();
    }
    public function saveEditDataInfaq($data,$id)
    {
        $query = $this->db->table('tbl_infaq')
        ->where('nik',$id)
        ->update($data);
        return $query;
    } 
    public function hapusDataInfaq($id)
    {
        $query = $this->db->table('tbl_infaq')
        ->where('nik',$id)
        ->delete();
        return $query;
    } 
}
