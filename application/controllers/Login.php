<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login', 'dataModelLogin');
        date_default_timezone_set('Asia/Jakarta');
    }
    
    public function index()
    {

        $this->load->view('backend/vw_login');
        
    }

    public function getLogin()
    {

    }

}

/* End of file Login.php */
