<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_add_users extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function getDataUsers()
    {
        return $this->db->get('t_users');
    }

    public function getInsertDataUsers($data_users)
    {
        $this->db->insert('t_users', $data_users);
    }

    public function getInsertDataAktifitas($data_aktifitas)
    {
        $this->db->insert('t_histori_aktifitas', $data_aktifitas);
    }

    public function DeletedByIdUsers($id){
        $this->db->where('id_users', $id);
        $this->db->delete('t_users');
      }

      public function UpdateUsers($where, $data_usersupdate){
        $this->db->update('t_users', $data_usersupdate, $where);
        return $this->db->affected_rows();
      }

    public function updateById($id)
      {
        $this->db->from('t_users');
        $this->db->where('id_users', $id);
        $query = $this->db->get();

        return $query->row();
      }

    public function createUsersId(){
        $this->db->select('RIGHT(t_users.id_users,6) as kode', FALSE);
        $this->db->order_by('id_users', 'DESC');
        $this->db->limit(1);
        $query  = $this->db->get('t_users');
        if($query->num_rows()<>0){
          $data = $query->row();
          $kode = intval($data->kode)+1;
        }
        else {
          $kode = 6;
        }
        $kodemax  = str_pad($kode, 6, "0", STR_PAD_LEFT);
        $kodejadi = "USR-".$kodemax;
        $kodejadi = "USR-".$kodemax;
        return $kodejadi;
      }

    
    

    

}

/* End of file ModelName.php */
