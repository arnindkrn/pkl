<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->auth();
        $data = array(
            'title' => 'Master Data',
            'isi' => 'pages/masterdata',
            'nav' => 'nav.php',
        );
        $data['data_laptop'] = $this->admin_model->getAllData();
        $this->load->view('layout/wrapper.php', $data);
    }

    public function getDataLaptop(){
        $data_awal = $this->admin_model->getAllData();
        $i = 1;
        $data = array();
        foreach ($data_awal as $d) {
            $d->no = $i;
            array_push($data, $d);
            $i++;
        }

        echo json_encode(array("data" => $data));
    }

    public function addData(){    
        $Tipe = $this->input->post('addTipe');
        // $SN = $this->input->post('addSN');
        $Office = $this->input->post('Office');
        $Windows = $this ->input->post('windows');
        $Kode = $this ->input->post('kdlaptop');
        $Nilai_Laptop = $this->input->post('nilaiLaptop');
        $jumlah = $this->input->post('jumlah');

        $merk = array();
        $data = $this->admin_model->get_merklaptop();
        foreach ($data as $d) {
            $kdlaptop = ''.$d->kdlaptop.'';
            $merk[$d->kdlaptop] = $d->Merk_laptop;
        }

        $data_laptop = array(
            'Merk_Laptop'   => $merk[$Kode],
            'Tipe'          => $Tipe,
            'Office'        => $Office,
            'windows'       => $Windows,    
            'kdlaptop'      => $Kode,
            'Nilai_Laptop'  => $Nilai_Laptop,
            'jumlah'        => $jumlah
        );

        if($Tipe == "" ||
            $Office == "" || $Windows == "" || $Kode == "" || $Nilai_Laptop == "" || $jumlah == ""){
            $_SESSION['fail'] = 'Harap masukan semua input';
        }else{
            $insert = $this->db->insert('data_laptop', $data_laptop);

            if($insert){
                $_SESSION['success'] = 'Sukses menambahkan data';  
            }else{
                $_SESSION['fail'] = 'Gagal menambahkan data';
            }
        }

        redirect(base_url('master'));
    }

    public function updateData(){
        $id = $this->input->post('id');
        $Tipe = $this->input->post('eTipe');
        // $SN = $this->input->post('SN');
        $Office = $this->input->post('eOffice');
        $Windows = $this->input->post('eWindows');
        $Kode = $this->input->post('ekdLaptop');
        $nilaiLaptop = $this->input->post('eNilai');
        $jumlah = $this->input->post('eJumlah');

        $merk = array();
        $data = $this->admin_model->get_merklaptop();
        foreach ($data as $d) {
            $kdlaptop = ''.$d->kdlaptop.'';
            $merk[$d->kdlaptop] = $d->Merk_laptop;
        }
        
        $where = array(
            'id' => $id
        );


        $data_laptop = array(
            'Merk_Laptop'   => $merk[$Kode],
            'Tipe' =>  $Tipe,
            'Office' => $Office,
            'Windows' => $Windows,
            'kdlaptop' => $Kode,
            'Nilai_Laptop' => $nilaiLaptop,
            'jumlah'        => $jumlah
        );

        if($Tipe == "" ||
            $Office == "" || $Windows == "" || $kdlaptop == "" || $nilaiLaptop == ""){
            echo json_encode(array('status' => 'fail', 'msg' => 'Please enter all required fields!', 'data' => $data));
        }else{            
            if($this->admin_model->update_data('data_laptop', $data_laptop, $where)) {
                echo json_encode(array('status' => 'ok', 'msg' => 'Data laptop berhasil diupdate'));
            }else{
                echo json_encode(array('status' => 'fail', 'msg' => 'Terdapat masalah saat mengupdate data'));
            }
        }
    }

    public function deleteData(){
        $id = $this->input->post('id');

        $where = array(
            'id' => $id
        );

        if($this->db->delete('data_laptop', $where)){
            echo json_encode(array('status' => 'ok', 'msg' => ''));
        }else{
            echo json_encode(array('status' => 'ok', 'msg' => ''));
        }

    }

  /*  public function edit($id){
        $data = array(
            'title' => 'Master Data',
            'isi' => 'pages/form_addData',
            'nav' => 'nav.php',
            'nav_active' => 'Master'

        );

        $this->load->helper(array('form', 'url'));
        
        $this->load->library('form_validation');
        
        $where = array('id' => $id);
        $data['data_laptop'] = $this->admin_model->edit($where, 'data_laptop')->result();

        $this->load->view('pages/form_editData', $data);
    }*/

    public function getData(){
        echo json_encode(array('data' => $this->admin_model->getData()->result()));
    }

    public function getData_Asus(){
        echo json_encode(array('data' => $this->admin_model->getData_Asus()->result()));
    }

    public function auth()
    {
        if (!isset($_SESSION['username'])) {
            # code...
            redirect(base_url());
        }
    }
}