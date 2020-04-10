<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_perantau extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }
    
    

    

}

/* End of file Model_perantau.php */
