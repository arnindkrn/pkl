<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dell extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

	public function index()
	{
		$this->auth();
		$data = array(
			'title' => 'Dell',
			'isi' => 'pages/dell',
			'nav' => 'nav.php',
			'nav_active' => 'Dashboard',
			'merk' => $this->admin_model->getData_Dell()


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