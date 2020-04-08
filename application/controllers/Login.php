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

    public function getLogin($id='')
    {
        $username=str_replace("'", "", htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES));
        $password=str_replace("'", "", htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));

        $this->dataModelLogin->getAuthLogin($username, $password);

    }

}

/* End of file Login.php */
