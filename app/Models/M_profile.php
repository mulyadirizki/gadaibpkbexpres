<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_profile extends Model{
 
    protected $table = "table_profiles";

    public function getProfile($id = false)
    {
        if($id === false){
            return $this->table('table_profiles')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('table_profiles')
                        ->where('table_profiles.id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertProfile($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateProfile($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteProfile($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
 
}