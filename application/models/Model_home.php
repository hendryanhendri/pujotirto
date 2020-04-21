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

    public function getPemudik()
    {
        $this->db->select('count(*) as total, tanggal_pulang');
        $this->db->from('vw_time_karantina');
        $this->db->group_by('tanggal_pulang');
        return $this->db->get();
    }

    public function getKarantinaSelesai()
    {
        $this->db->select('count(karantina_status) as total');
        $this->db->where('karantina_status', 'KARANTINA SELESAI');
        return $this->db->get('vw_master_dynamic_data');

    }

    public function getKarantinaBelumSelesai()
    {
        $this->db->select('count(karantina_status) as total');
        $this->db->where('karantina_status', 'ON KARANTINA');
        return $this->db->get('vw_master_dynamic_data');

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

    public function getDataHistori()
    {
        return $this->db->get('t_histori_aktifitas');

    }

    public function getDataPerRw()
    {
        $this->db->select('count(*) as total, rw');
        $this->db->from('t_perantau');
        $this->db->group_by('rw');
        return $this->db->get();
    }

    public function getDataPerRwPdp()
    {
        $this->db->select('count(*) as total, rw');
        $this->db->where('status_','PDP');
        $this->db->from('t_perantau');
        $this->db->group_by('rw');
        return $this->db->get();

    }

    public function getDataMaster()
    {
        return $this->db->get('vw_time_karantina');
    }
    



    


    

    

}

/* End of file Model_home.php */
