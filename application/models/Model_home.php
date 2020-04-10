<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function getInsertAnalytic($data)
    {
        $this->db->insert('t_visit_pj', $data);
    }

    public function getDataODP()
    {
        $this->db->select('count(status_) as total');
        $this->db->where('status_', 'ODP');
        return $this->db->get('t_perantau');
    }

    public function getDataPDP()
    {
        $this->db->select('count(status_) as total');
        $this->db->where('status_', 'PDP');
        return $this->db->get('t_perantau');
    }

    public function getDataPemudik()
    {
        $this->db->select('count(source_data) as total');
        $this->db->where('source_data', 'PERANTAU');
        return $this->db->get('t_perantau');
    }

    public function getDataPositif()
    {
        $this->db->select('count(status_) as total');
        $this->db->where('status_', 'POSITIF');
        return $this->db->get('t_perantau');
    }

    public function getDataMeninggal()
    {
        $this->db->select('count(status_) as total');
        $this->db->where('status_', 'MENINGGAL');
        return $this->db->get('t_perantau');
    }

    public function getDataSembuh()
    {
        $this->db->select('count(status_) as total');
        $this->db->where('status_', 'SEMBUH');
        return $this->db->get('t_perantau');
    }
    



    


    

    

}

/* End of file Model_home.php */
