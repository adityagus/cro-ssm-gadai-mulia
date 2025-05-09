<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
	public function __construct(){
		parent::__construct();
    	$this->load->model('M_login');
		$this->CI =& get_instance();
	}

  	public function index(){
    	$this->load->view('v_login_v2');
  	}

  	function aksilogin(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$cek = $this->M_login->cek_login($user);		

		if($cek){
			if(crypt($pass,$cek[0]->password) == $cek[0]->password){
				$nama = $cek[0]->nm_depan;
                if($cek[0]->nm_belakang) $nama .= ' '.$cek[0]->nm_belakang;

				$datasession = [
					'nama' => $nama,
					'user' => $cek[0]->username,
					'idgrup' => $cek[0]->kd_jabatan,
					'status' => "login"
				];

				$this->session->set_userdata($datasession);
				redirect(base_url('C_cro/loading_page'));
			}
			else{
				echo "<script>alert('Oops... Username/Password Salah!!!Cek');</script>";
        		redirect('C_login','refresh');
			}

		}
		else{
			echo "<script>alert('Oops... Username/Password Salah!!!');</script>";
        	redirect('C_login','refresh');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('C_login'));
	}
}
?>