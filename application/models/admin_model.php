<?php
class Admin_model extends CI_Model{

    public function getAllData(){
        $hasil = $this->db->get('data_laptop');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return array();
        }
    }

    public function getAllDataSerah(){
        $hasil = $this->db->get('serah_terima');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return array();
        }
    }

    public function get_jatuh_tempo()
    {
        $data_serah = $this->getAllDataSerah();
        $counter_notif = 0;

        foreach ($data_serah as $data) {
            $date = new DateTime($data->Akhir_Tagihan);
            $now = new DateTime();

            if($date < $now) {
                $counter_notif++;
            }   
        }

        return $counter_notif;
    }

    public function find($id){
        $hasil = $this->db->where('id', $id)->limit(1)->get('data_laptop');
        if($hasil->num_rows() > 0){
            return $hasil->row_array();
        }else{
            return array();
        }
    }

    public function addData($data_laptop){
        $this->db->insert('data_laptop', $data_laptop);
    }

    public function edit($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_data($table, $data, $where){
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function delete_data($id){
        $this->db->where('id', $id)->delete('data_laptop');
    }

    public function delete($id){
        $this->db->where('id', $id)->delete('serah_terima');
    }

    function getData_Asus(){
        $this->db->select('*');
        $this->db->join('merklaptop', 'data_laptop.kdlaptop = merklaptop.kdlaptop');
        $this->db->where('data_laptop.kdlaptop', 'KD-1');
        $query = $this->db->get('data_laptop');

        if($query->num_rows() > 0){
            return $query;
        }else{
            return false;
        }
    }

    function getData_Dell(){
        $this->db->select('*');
        $this->db->join('merklaptop', 'data_laptop.kdlaptop = merklaptop.kdlaptop');
        $this->db->where('data_laptop.kdlaptop', 'KD-2');
        $query = $this->db->get('data_laptop');

        if($query->num_rows() > 0){
            return $query;
        }else{
            return false;
        }
    }

    function updateTable($table,$data,$where){
        $this->db->where($where);
        return $this->db->update($table, $data);
    }


    function getMerk(){
        $this->db->select('*');
        $query = $this->db->get('data_laptop');

        if($query->num_rows() > 0){
            return $query;
        }else{
            return false;
        }
    }

    public function get_latest_laptop($limit=null)
    {
        if (isset($limit)) {
            $this->db->from('data_laptop');
            $this->db->order_by("id", "DESC");
            $this->db->limit($limit);
            $query = $this->db->get();
            return $query->result();
        } else {
            $this->db->from('data_laptop');
            $this->db->order_by("id", "DESC");
            $query = $this->db->get();
            return $query->result();
        }
    }    

    public function get_laptop($merk)
    {
        return $this->db->get_where('data_laptop', array('Merk_Laptop'=>$merk));
    }

    public function get_merklaptop()
    {
        return $this->db->get('merklaptop')->result();
    }

     public function get_status()
    {
        return $this->db->get('status')->result();
    }

    public function get_data_laptop(){
        return $this->db->get('data_laptop')->result();   
    }

    public function getNilaiLaptop_where($id){
        $query = $this->db->get_where('data_laptop', array('id'=>$id));

        if ($query->num_rows() > 0)
        {
            $row = $query->row(); 
            return $row->Nilai_Laptop;
        }

        return null;
    }
}
