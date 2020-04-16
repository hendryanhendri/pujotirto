<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
    

    public function index()
    {
        $data['content']    = 'front/akan_datang';
        


        $this->load->view('vw_dashboard', $data);
        
    }

}

/* End of file Berita.php */
