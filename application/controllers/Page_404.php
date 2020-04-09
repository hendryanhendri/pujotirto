<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_404 extends CI_Controller {

    public function index()
    {
        $this->load->view('errors/html/error_404');
        
    }

}

/* End of file Page_404.php */
