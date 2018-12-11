<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarpenyewa extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

	public function index()
	{
		$data = array(
			'isi' => 'pages/daftarpenyewa',
			
			'nav_active' => 'Laptop',
		);
		$data['serah_terima'] = $this->admin_model->getAllDataSerah();
		$this->load->view('pages/daftarpenyewa',$data);
	}

}