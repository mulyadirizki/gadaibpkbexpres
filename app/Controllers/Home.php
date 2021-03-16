<?php namespace App\Controllers;

use App\Models\M_profile;
use App\Models\M_upload;

class Home extends BaseController
{
	public function __construct()
	{
		$this->profile = new M_profile();
		$this->images = new M_upload();
	}

	public function index()
	{
		helper('form');
		$data = [
            'title' => 'GADAI BPKB EXPRESS',
			'isi'   => 'index',
			'profile' => $this->profile->getProfile(),
			'gambar' => $this->images->getImages()
        ];

        return view('front/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

}
