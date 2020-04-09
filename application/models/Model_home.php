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

    


    

    

}

/* End of file Model_home.php */
