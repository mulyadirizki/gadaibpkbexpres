<?php namespace App\Controllers;

use App\Models\M_auth;

class C_login extends BaseController
{

    public function __construct() {
        $this->auth = new M_auth;
    }

	public function index()
	{
		return view('v_login');
    }
    
    public function proses()
	{
        $username = htmlspecialchars($this->request->getPost('username'));
        $password = htmlspecialchars($this->request->getPost('password'));

        $cek_login = $this->auth->getLogin($username, $password);

        if(!empty($cek_login)){

            // if(password_verify($password, $cek_login["password"])){
                session()->set("id", $cek_login['id']);
                session()->set("username", $cek_login['username']);
                session()->set("password", $cek_login['password']);
                session()->set("level", $cek_login['level']);

                if ($cek_login['level'] == "admin") {
                   return redirect()->to('/administrator');
                }
                elseif ($cek_login['level'] == "operator") {
                    return redirect()->to('/operator');
                }

                // return redirect()->to('/administrator');
            // }else{
            //     session()->setFlashdata('error', 'Username atau Password Salah');
            //     return redirect()->to('/v_login');
            // }

        } else {
            session()->setFlashdata('error', 'Username atau Password Salah');
            return redirect()->to('/login');
        
        }
        
    }

    public function register(){
        return view('v_register');
    }

    public function proses_register(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $pass = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'username' => $username,
            'password' => $pass,
            'level' => 'admin'
        ];

         $insert = $this->auth->register("users", $data);

        // if($insert){

        //     $this->session->set_flashdata('success_login', 'Sukses, Anda berhasil register. Silahkan login sekarang.');
        //     redirect('auth');

        // }
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

}