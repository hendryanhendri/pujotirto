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
    

    

}

/* End of file ModelName.php */
