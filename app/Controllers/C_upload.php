<?php namespace App\Controllers;

// Tambahkan Upload Model di sini
use App\Models\M_upload;

class C_upload extends BaseController
{

    protected $model_upload;

    public function __construct() {

        // Memanggil form helper
        helper('form');
        // Menyiapkan variabel untuk menampung upload model
        $this->upload = new M_upload();
    }

    public function create()
    {
        helper('form');
        $data = [
            'title' => 'Administrator',
            'isi'   => 'admin/pages/images/create',
        ];

        echo view('admin/layout/v_wrapper', $data);
    }
 
    public function process()
    {

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('upload'));
        }

        $validated = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validated == FALSE) {
            
            // Kembali ke function index supaya membawa data uploads dan validasi
            return $this->index();

        } else {

            $title = $this->request->getPost('title');
            $avatar = $this->request->getFile('file_upload');
            $avatar->move(ROOTPATH . 'uploads');

            $data = [
                'title' => $title,
                'gambar' => $avatar->getName()
            ];
    
            $this->upload->insertGambar($data);
            return redirect()->to(base_url('administrator/gambar-kendaraan'))->with('success', 'Upload successfully'); 
        }
    }

    public function delete($id)
    {
        $hapus = $this->upload->deleteImages($id);
        if($hapus)
        {
            session()->setFlashdata('success', 'Deleted Profile successfully');
            return redirect()->to(base_url('administrator/gambar-kendaraan')); 
        }
    }

}