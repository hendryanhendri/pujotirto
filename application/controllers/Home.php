<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_home', 'dataModelHome');
        date_default_timezone_set('Asia/Jakarta');
    }
    
    public function index()
    {
        $this->Secure_access->getsecurity();
        

        $this->load->view('backend/vw_home');
    }

}

/* End of file Home.php */
