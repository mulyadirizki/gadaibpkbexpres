<?php namespace App\Models;

use CodeIgniter\Model;

class M_upload extends Model
{
    // protected $table;

    // public function __construct() {

    //     parent::__construct();
    //     $db = \Config\Database::connect();
    //     $this->table = $this->db->table('table_uploads');
    // }

    // public function getImages()
    // {
    //     return $this->table->get()->getResultArray();
    // }

    protected $table = "table_uploads";

    public function getImages($id = false)
    {
        if($id === false){
            return $this->table('table_uploads')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('table_uploads')
                        ->where('table_uploads.id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
    public function insertGambar($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

     public function deleteImages($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
} 