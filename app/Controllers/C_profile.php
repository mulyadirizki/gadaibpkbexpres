<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_profile;

class C_profile extends Controller
{

	public function __construct()
    {
        $this->profile = new M_profile();   
    }

    public function create()
    {
        helper('form');
        $data = [
            'title' => 'Administrator',
            'isi'   => 'admin/pages/profile/create',
        ];

        echo view('admin/layout/v_wrapper', $data);
    }

    public function process()
    {
        $no_hp = htmlspecialchars($this->request->getPost('no_hp'));
        $email = htmlspecialchars($this->request->getPost('email'));
        $alamat = htmlspecialchars($this->request->getPost('alamat'));

        $data = [
            'no_hp' => $no_hp,
            'email' => $email,
            'alamat' => $alamat
        ];

        $simpan = $this->profile->insertProfile($data);
        if($simpan)
        {
            session()->setFlashdata('success', 'Created Profile successfully');
            return redirect()->to(base_url('administrator/profile')); 
        }
    }

    public function update($id)
    {
        helper('form');
        $data = [
            'title' => 'Administrator',
            'isi'   => 'admin/pages/profile/update',
            'profile' => $this->profile->getProfile($id)
        ];

        echo view('admin/layout/v_wrapper', $data);
    }

    public function process_edit($id)
    {
        $no_hp = htmlspecialchars($this->request->getPost('no_hp'));
        $email = htmlspecialchars($this->request->getPost('email'));
        $alamat = htmlspecialchars($this->request->getPost('alamat'));

        $data = [
            'no_hp' => $no_hp,
            'email' => $email,
            'alamat' => $alamat
        ];

        $simpan = $this->profile->updateProfile($data, $id);
        if($simpan)
        {
            session()->setFlashdata('success', 'Update Profile successfully');
            return redirect()->to(base_url('administrator/profile')); 
        }
    }

    public function delete($id)
    {
        $hapus = $this->profile->deleteProfile($id);
        if($hapus)
        {
            session()->setFlashdata('success', 'Deleted Profile successfully');
            return redirect()->to(base_url('administrator/profile')); 
        }
    }




	//--------------------------------------------------------------------

}
