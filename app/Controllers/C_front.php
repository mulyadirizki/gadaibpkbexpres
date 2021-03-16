<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_profile;
use App\Models\M_front;
use App\Models\M_pengajuan;

class C_front extends Controller
{

	public function __construct()
    {
        $this->profile = new M_profile();
        $this->message = new M_front();  
        $this->pengajuan = new M_pengajuan();  
    }

    public function pengajuan()
    {
        helper('form');
        $data = [
            'title' => 'GADAI BPKB EXPRESS',
            'isi'   => 'front/pengajuan',
            'profile' => $this->profile->getProfile()
        ];

        return view('front/v_wrapper', $data);
    }

    public function process()
    {
        $name = htmlspecialchars($this->request->getPost('name'));
        $email = htmlspecialchars($this->request->getPost('email'));
        $subject = htmlspecialchars($this->request->getPost('subject'));
        $message = htmlspecialchars($this->request->getPost('message'));

        $data = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ];

        $simpan = $this->message->insertMessage($data);
        if($simpan)
        {
            session()->setFlashdata('success', 'Pesan Berhasil Terkirim');
            return redirect()->to(base_url('/')); 
        }
    }

    public function delete($id_message)
    {
        $hapus = $this->message->deleteMessage($id_message);
        if($hapus)
        {
            session()->setFlashdata('success', 'Deleted Profile successfully');
            return redirect()->to(base_url('administrator/message')); 
        }
    }

    public function process_simulasi()
    {
        $first_name = htmlspecialchars($this->request->getPost('first_name'));
        $last_name = htmlspecialchars($this->request->getPost('last_name'));
        $email = htmlspecialchars($this->request->getPost('email'));
        $alamat = htmlspecialchars($this->request->getPost('alamat'));
        $jenis_kendaraan = htmlspecialchars($this->request->getPost('jenis_kendaraan'));
        $status_kendaraan = htmlspecialchars($this->request->getPost('status_kendaraan'));
        $tahun_pembuatan = htmlspecialchars($this->request->getPost('tahun_pembuatan'));
        $no_hp = htmlspecialchars($this->request->getPost('no_hp'));

        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'alamat' => $alamat,
            'jenis_kendaraan' => $jenis_kendaraan,
            'status_kendaraan' => $status_kendaraan,
            'tahun_pembuatan' => $tahun_pembuatan,
            'no_hp' => $no_hp,
        ];

        $simpan = $this->pengajuan->insertPengajuan($data);
        if($simpan)
        {
            session()->setFlashdata('success', 'Pengajuan Berhasil Terkirim');
            return redirect()->to(base_url('/')); 
        }
    }

    public function delete_pengajuan($id_pengajuan)
    {
        $hapus = $this->pengajuan->deletePengajuan($id_pengajuan);
        if($hapus)
        {
            session()->setFlashdata('success', 'Deleted successfully');
            return redirect()->to(base_url('administrator/pengajuan-customers')); 
        }
    }
	//--------------------------------------------------------------------

}
