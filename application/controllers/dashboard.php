<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != ""){
			redirect(base_url("dashboard"));
		}
	}
	public function index()
	{
		$this->auth();
		$data = array(
			'title' => 'Beranda',
			'isi' => 'pages/dashboard',
			'nav' => 'nav.php',
			'laptop' => $this->admin_model->get_latest_laptop(5)

		);
		$this->load->view('layout/wrapper',$data);
	}

	public function auth()
	{
	    if (!isset($_SESSION['username'])) {
	        # code...
	        redirect(base_url());
	    }
	}

}