<?php

namespace App\Models;

use CodeIgniter\Model;

class MDataMal extends Model
{
    public function getDataMal()
    {
        $query = $this->db->query("select * from tbl_zakatmal");
        return $query->getResult();
    } 
    public function saveDataMal($data)
    {
        $query = $this->db->table('tbl_zakatmal')->insert($data);
        return $query;
    }   
    public function getSelectDataMal($id)
    {
        $query = $this->db->query("select * from tbl_zakatmal where nik = $id");
        return $query->getResult();
    }
    public function saveEditDataMal($data,$id)
    {
        $query = $this->db->table('tbl_zakatmal')
        ->where('nik',$id)
        ->update($data);
        return $query;
    } 
    public function hapusDataMal($id)
    {
        $query = $this->db->table('tbl_zakatmal')
        ->where('nik',$id)
        ->delete();
        return $query;
    } 
}
