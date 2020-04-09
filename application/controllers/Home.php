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

        $url        = 'https://api.kawalcorona.com/indonesia'; // path to your JSON file
        $data_url   = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data_url); // decode the JSON feed
    
        $result['get_data_covid'] = $characters;
        

        $this->load->view('backend/vw_home', $result);
    }

}

/* End of file Home.php */
