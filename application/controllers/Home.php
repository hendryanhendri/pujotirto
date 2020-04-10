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
        $result['content']  = 'backend/content/vw_content_home';

        $url        = 'https://api.kawalcorona.com/indonesia'; // path to your JSON file
        $data_url   = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data_url); // decode the JSON feed
    
        $result['get_data_covid'] = $characters;
        
        $result['getODP']       = $this->dataModelHome->getDataODP()->result();
        $result['getPDP']       = $this->dataModelHome->getDataPDP()->result();
        $result['getPemudik']   = $this->dataModelHome->getDataPemudik()->result();
        $result['getPositif']   = $this->dataModelHome->getDataPositif()->result();
        $result['getMeninggal'] = $this->dataModelHome->getDataMeninggal()->result();
        $result['getSembuh']    = $this->dataModelHome->getDataSembuh()->result();

        

        $this->load->view('backend/vw_home',$result);
    }

    public function text_berjalan()
    {
        $result['content']  = 'backend/content/vw_content_text_berjalan';

        $this->load->view('backend/vw_home',$result);

    }

    public function histori_aktifitas()
    {
        $result['content']  = 'backend/content/vw_content_histori';
        
        $result['getHistori']   = $this->dataModelHome->getDataHistori()->result();

        $this->load->view('backend/vw_home',$result);

    }

    public function master_data()
    {
        $result['content']  = 'backend/content/vw_content_masterdata';

        $this->load->view('backend/vw_home',$result);
    }

}

/* End of file Home.php */
