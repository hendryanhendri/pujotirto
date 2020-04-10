<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perantau extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_perantau', 'dataModelPerantau');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index($id='')
    {
        $this->Secure_access->getsecurity();
        
        $this->load->view('backend/vw_home');
    }

    public function add_perantau($id='')
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_perantau';
        

        $this->load->view('backend/vw_home', $result);

    }

    public function add_non_perantau($id='')
    {
        $result['content']  = 'backend/content/vw_content_non_perantau';


        $this->load->view('backend/vw_home', $result);

    }

}

/* End of file Perantau.php */
