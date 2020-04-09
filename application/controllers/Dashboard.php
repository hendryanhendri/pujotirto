<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_home', 'dataModelHome');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $value = array(
            'visit_date'    => date("Y-m-d H:i:s"),
            'pj_ip'         => $this->input->ip_address(),
            'pj_version'    => $_SERVER['HTTP_USER_AGENT'],
            'pj_os'         => php_uname(),
            'pages'         => 'Dashboard',
        );
        $this->dataModelHome->getInsertAnalytic($value);

        $url        = 'https://api.kawalcorona.com/indonesia'; // path to your JSON file
        $data_url   = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data_url); // decode the JSON feed
    
        $result['get_data_covid'] = $characters;

        $this->load->view('vw_dashboard', $result);
        
    }

}

/* End of file Dashboard.php */
