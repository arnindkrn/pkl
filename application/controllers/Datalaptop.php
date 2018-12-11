<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalaptop extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

	public function index()
	{
		$data = array(
			'title' => 'Data Laptop',
			'isi' => 'pages/datalaptop',
			'nav_active' => 'Laptop',
			'merk' => $this->admin_model->getAllData()
		);
		$this->load->view('pages/datalaptop',$data);
	}

}