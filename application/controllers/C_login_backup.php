<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
	public function __construct(){
		parent::__construct();
    	$this->load->model('M_login');
		$this->CI =& get_instance();
	}

  public function index()
  {
    // $this->load->view('v_login');//version old
    $this->load->view('v_login_v2');//testing version 2
  }

  function aksilogin()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$cek = $this->M_login->cek_login_v2($user,$pass)->num_rows();
		$a = $this->M_login->get_data_v2($user,$pass)->row();
		// print_r($a);
		// die();

		if($cek > 0){
			$datasession = array(
				'nama' => $a->nama,
				'user' => $a->username,
				'idgrup' => $a->idgrup,
				'status' => "login"
			);
			// var_dump($datasession);
			// die();

			$this->session->set_userdata($datasession);
			// redirect(base_url('C_cro/viewquest'));//Version Old //not used
			// redirect(base_url('C_cro/home'));//used //version old
			redirect(base_url('C_cro/loading_page'));//used //version new

		}else{
			// $this->CI->session->set_flashdata('gagal','Oops... Username/password salah');//old not used
			echo "<script>alert('Oops... Username/Password Salah!!!');</script>";
        	redirect('C_login','refresh');
			// redirect(base_url('C_login'));//old not used
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('C_login'));
	}
}
?>