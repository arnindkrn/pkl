<?php 

class Form extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('pages/form_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'status' => ""
				);

			$this->session->set_userdata('username',$username);

			redirect(base_url("dashboard"));

		}else{
			echo $_SESSION['login_error'] = 'Username atau Password Salah!';

			redirect(base_url("form"));

		}
	}

	function logout(){
		unset($_SESSION['username']);
		$this->session->sess_destroy();
		redirect(base_url());
	}
}