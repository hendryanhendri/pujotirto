<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_add_users','getModelUsers');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index($id='')
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_users';

        $this->load->view('backend/vw_home', $result);
        
    }

}

/* End of file Add_users.php */
