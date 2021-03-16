<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_front extends Model{
 
    protected $table = "table_messages";

    public function getMessage($id = false)
    {
        if($id === false){
            return $this->table('table_messages')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('table_messages')
                        ->where('table_messages.id_message', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertMessage($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function deleteMessage($id_message)
    {
        return $this->db->table($this->table)->delete(['id_message' => $id_message]);
    } 

 
}