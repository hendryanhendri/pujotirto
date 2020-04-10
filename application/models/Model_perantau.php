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
    

    

}

/* End of file Model_perantau.php */
