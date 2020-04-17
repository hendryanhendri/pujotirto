<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
    

    public function index()
    {
        $data['content']    = 'front/content_information';
        $this->load->library('user_agent');
        $value = array(
            'visit_date'    => date("Y-m-d H:i:s"),
            'pj_ip'         => $this->input->ip_address(),
            'pj_version'    => $_SERVER['HTTP_USER_AGENT'],
            'pj_browser'    => $this->agent->browser(),
            'pj_version_browser' => $this->agent->version(),
            'pj_os'         => php_uname(),
            'pages'         => 'Info',
        );

        $this->load->view('vw_dashboard', $data);
        
    }

    public function info_kami($id='')
    {
        $data['content']    = 'front/content_tentang_kami';


        $this->load->view('vw_dashboard', $data);

    }

    public function saran_masukan($id='')
    {
        $data['content']    = 'front/content_saran_masukan';


        $this->load->view('vw_dashboard', $data);

    }

}

/* End of file Info.php */
