<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serahterima extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index() 
	{
		$this->auth();
		$data = array(
			'title' => 'Serah Terima',
			'isi' => 'pages/serahterima',
			'nav' => 'nav.php',

		);
		$data['serah_terima'] = $this->admin_model->getAllDataSerah();
        $data['data_laptop'] = $this->admin_model->get_data_laptop();
		$this->load->view('layout/wrapper', $data);
	}

    public function auth()
    {
        if (!isset($_SESSION['username'])) {
            # code...
            redirect(base_url());
        }
    }

	public function addData(){

        $data = array(
            'title' => 'Serah Terima',
            'isi' => 'pages/form_addData',
            'nav' => 'nav.php',
            'nav_active' => 'Master'

        );
        
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('Merk_Laptop', 'Merk_Laptop', 'required');
        $this->form_validation->set_rules('Tipe', 'Tipe');
        $this->form_validation->set_rules('S_N', 'S_N', 'required');
        $this->form_validation->set_rules('Office', 'Office', 'required');
        $this->form_validation->set_rules('Windows', 'Windows', 'required');
        $this->form_validation->set_rules('Masa_Aktif', 'Masa_Aktif');
        $this->form_validation->set_rules('kdlaptop', 'kdlaptop');

       
        if ($this->form_validation->run() == false)
        {
            $this->load->view('layout/wrapper', $data);
        } else{
            $data_laptop = array(
                'Merk_Laptop'   => set_value('Merk_Laptop'),
                'Tipe'          => set_value('Tipe'),
                'S_N'           => set_value('S_N'),
                'Office'        => set_value('Office'),
                'windows'       => set_value('Windows'),
                'Masa_Aktif'    => set_value('Masa_Aktif'),
                'kdlaptop'      => set_value('kdlaptop')
            );
            $this->admin_model->addData($data_laptop);
            redirect('master');
        }
        
    }

    public function edit($id){

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
    }

    public function delete($id){
        $this->admin_model->delete($id);
        redirect('master');
    }

	public function getData(){
        echo json_encode(array('data' => $this->admin_model->getData()->result()));
    }

    public function addSerahTerima(){
       
        $user = $this->input->post('user');
        $bast = $this->input->post('addBast');
        $tglbast = $this->input->post('addtglBAST');
        $jabatan = $this->input->post('addJabatan');
        $awaltag = $this->input->post('addAwalTagihan');
        $akhirtag = $this->input->post('addAkhirTagihan');
        $kdlaptopDipinjam = $this->input->post('kdlaptopDipinjam');

        $m1 = date("m",strtotime($awaltag));
        $m2 = date("m",strtotime($akhirtag));
        $y1 = date("y",strtotime($awaltag));
        $y2 = date("y",strtotime($akhirtag));


        $nilai_laptop = $this->admin_model->getNilaiLaptop_where($kdlaptopDipinjam);

        $bedaTahun = $y2-$y1;
        $tahunKeBulan = $bedaTahun*12;
        $bulanTagihan = $tahunKeBulan+$m2-$m1;
        $harga = $nilai_laptop-500000;
        $harga = $harga/$bulanTagihan;
        $harga = ceil($harga);
            if (substr($harga,-3)>499){
                $harga2=round($harga,-3);
            } else {
                $harga2=round($harga,-3)+1000;
            }                              
        $harga2 = number_format($harga2,2,',','.');

        $data_serah = array(
            'user'          => $user,
            'BAST'          => $bast,
            'tgl_BAST'      => $tglbast,
            'Jabatan'       => $jabatan,
            'Awal_Tagihan'  => $awaltag,    
            'Akhir_Tagihan' => $akhirtag,    
            'Harga_Sewa'    => $harga2,
            'id_Data_Laptop'=> $kdlaptopDipinjam
        );

            if($user == "" || $bast == "" || $tglbast == "" ||
            $jabatan == "" || $awaltag == "" || $akhirtag == ""){
                echo json_encode(array('status' => 'fail', 'msg' => 'Harap masukkan semua input...'));

            }else{
                $insert = $this->db->insert('serah_terima', $data_serah);

                $jumlah = $this->admin_model->find($kdlaptopDipinjam)['jumlah'];

                $this->db->where('id', $kdlaptopDipinjam);
                $this->db->update('data_laptop', array('jumlah' => $jumlah-1));

                if($insert){
                    echo json_encode(array('status' => 'ok', 'data' => $data_serah, 'msg' =>"Sukses"));  
                }else{
                    echo json_encode(array('status' => 'fail', 'data' => $data_serah, 'msg' =>"Gagal"));
                }
            }
                
    }

    public function updateData(){
        $id = $this->input->post('id');
        $user = $this->input->post('user');
        $bast = $this->input->post('bast');
        $tglbast = $this->input->post('tglBast');
        $jabatan = $this->input->post('jabatan');
        $awaltagihan = $this->input->post('awalTag');
        $akhirtagihan = $this->input->post('akhirTag');
        $kdlaptopDipinjam = $this->input->post('kdlaptopDipinjam');
       /* $harga = $this->input->post('hargaSewa');*/
       
        $m1 = date("m",strtotime($awaltagihan));
        $m2 = date("m",strtotime($akhirtagihan));
        $y1 = date("y",strtotime($awaltagihan));
        $y2 = date("y",strtotime($akhirtagihan));

        $nilai_laptop = $this->admin_model->getNilaiLaptop_where($kdlaptopDipinjam);
        
        $bedaTahun = $y2-$y1;
        $tahunKeBulan = $bedaTahun*12;
        $bulanTagihan = $tahunKeBulan+$m2-$m1;
        $harga = $nilai_laptop-500000;
        $harga = $harga/$bulanTagihan;
        $harga = ceil($harga);
            if (substr($harga,-3)>499){
                $harga2=round($harga,-3);
            } else {
                $harga2=round($harga,-3)+1000;
            }                              
        $harga2 = number_format($harga2,2,',','.');

        $where = array(
            'id' => $id
        );


         $data = array(
                'user'          => $user,
                'BAST'          => $bast,
                'tgl_BAST'      => $tglbast,
                'Jabatan'       => $jabatan,
                'Awal_Tagihan'  => $awaltagihan,    
                'Akhir_Tagihan' => $akhirtagihan,    
                'Harga_Sewa'    => $harga2
        );


        if($user == "" || $bast == "" || $tglbast == "" ||
            $jabatan == "" || $awaltagihan == "" || $akhirtagihan == ""){ 
            echo json_encode(array('status' => 'fail', 'msg' => 'Please enter all required fields!', 'data' => $data));
    
        }else{
             if($this->admin_model->updateTable('serah_terima', $data, $where)){
                echo json_encode(array('status' => 'ok', 'msg' => '','data' => $data));
            }else{
                 echo json_encode(array('status' => 'fail', 'msg' => ''));
             }
        }
    }



     public function deleteSerah(){
        $id = $this->input->post('id');

        $where = array(
            'id' => $id
        );

        if($this->db->delete('serah_terima', $where)){
            echo json_encode(array('status' => 'ok', 'msg' => ''));
        }else{
            echo json_encode(array('status' => 'ok', 'msg' => ''));
        }
    }

    // public function cekTagihanBulanan(){
    //      $data = $this->admin_model->getAllDataSerah();
    //      foreach ($data as $d) {
    //         $awaltagihan = new DateTime($d->Awal_Tagihan);
    //         $today = new DateTime(date('Y-m-d'));
    //         $interval = date_diff($awaltagihan, $today);
    //         $bulan = $interval->m + ($interval->y * 12);

    //         $data = array(
    //             'Harga_Sewa' => $bulan * 
    //         );
    //      }
    // }

}