<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_perantau extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function getInsertData($data_perantau)
    {
        $this->db->insert('t_perantau', $data_perantau);
       
    }
    
    public function getInsertDataKarantina($data_karantina)
    {
        $this->db->insert('t_karantina', $data_karantina);
    }

    public function getInsertDataAktifitas($data_aktifitas)
    {
        $this->db->insert('t_histori_aktifitas', $data_aktifitas);
    }

    public function getInsertDataTamu($data_tamu)
    {
        $this->db->insert('t_tamu', $data_tamu);
    }

    public function getDataTamu()
    {
        return $this->db->get('t_tamu');
    }

    public function updateById($id)
      {
        $this->db->from('t_perantau');
        $this->db->where('nik', $id);
        $query = $this->db->get();

        return $query->row();
      }

    public function getDataOdp()
    {
        $this->db->select('*');
        $this->db->where('status_', 'ODP');
        $this->db->from('vw_time_karantina');
        return $this->db->get();
    }
    

}

/* End of file Model_perantau.php */
