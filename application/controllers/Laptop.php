<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

	public function merk($merk)
	{
		$this->auth();
		$data = array(
			'title' => 'Asus',
			'isi' => 'pages/asus',
			'nav' => 'nav.php',	
			'nav_active' => 'Laptop',
			'merk' => $this->admin_model->get_laptop($merk),
			'wow' => $merk
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