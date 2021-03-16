<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_profile;
use App\Models\M_front;
use App\Models\M_upload;
use App\Models\M_pengajuan;

class C_admin extends Controller
{

	public function __construct()
    {
        $this->profile = new M_profile();
        $this->pesan = new M_front();
        $this->images = new M_upload();
        $this->pengajuan = new M_pengajuan();
    }

	public function index()
	{
		$data = [
            'title' => 'Administrator',
            'isi'   => 'admin/index',
        ];

        echo view('admin/layout/v_wrapper', $data);
    }

    public function pesan()
    {
        $data = [
            'title' => 'Administrator',
            'isi'   => 'admin/pages/message/index',
            'pesan' => $this->pesan->getMessage()
        ];

        echo view('admin/layout/v_wrapper', $data);
    }

    public function pengajuan()
    {
        $data = [
            'title' => 'Administrator',
            'isi'   => 'admin/pages/pengajuan/index',
            'pengajuan' => $this->pengajuan->getPengajuan()
        ];

        echo view('admin/layout/v_wrapper', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Administrator',
            'isi'   => 'admin/pages/profile/index',
            'profile' => $this->profile->getProfile()
        ];

        echo view('admin/layout/v_wrapper', $data);
    }

    public function images()
    {
        $data = [
            'title' => 'Administrator',
            'isi'   => 'admin/pages/images/index',
            'gambar' => $this->images->getImages()
        ];

        echo view('admin/layout/v_wrapper', $data);
    }


	//--------------------------------------------------------------------

}
