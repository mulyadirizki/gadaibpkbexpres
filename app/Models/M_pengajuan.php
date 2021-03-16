<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_pengajuan extends Model{
 
    protected $table = "table_pengajuan";

    public function getPengajuan($id = false)
    {
        if($id === false){
            return $this->table('table_pengajuan')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('table_pengajuan')
                        ->where('table_pengajuan.id_pengajuan', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertPengajuan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function deletePengajuan($id_pengajuan)
    {
        return $this->db->table($this->table)->delete(['id_pengajuan' => $id_pengajuan]);
    } 

 
}