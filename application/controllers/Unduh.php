<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unduh extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download','form'));				
	}

	public function index()
	{
		$this->load->view('pages/unduh');
	}

	public function download_form(){				
		force_download('assets/form/Form.docx',NULL);
	}
}
