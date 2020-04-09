<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $url        = 'https://api.kawalcorona.com/indonesia'; // path to your JSON file
        $data       = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data); // decode the JSON feed
    
        $result['get_data_covid'] = $characters;

        // $data_visit = array(
        //     ''  => ,

        // );



        $this->load->view('vw_dashboard', $result);
        
    }

}

/* End of file Dashboard.php */
