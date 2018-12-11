<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asus extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

	public function index()
	{
		$this->auth();
		$data = array(
			'title' => 'Asus',
			'isi' => 'pages/asus',
			'nav' => 'nav.php',
			'nav_active' => 'Laptop',
			'merk' => $this->admin_model->getData_Asus()
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