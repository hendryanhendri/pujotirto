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

        // $url        = 'https://api.kawalcorona.com/indonesia'; // path to your JSON file
        // $data_url   = file_get_contents($url); // put the contents of the file into a variable
        // $characters = json_decode($data_url); // decode the JSON feed

        // $result['get_data_covid'] = $characters;
        $result['dataRw']                   = $this->dataModelHome->getDataPerRw()->result();
        $result['getODP']                   = $this->dataModelHome->getDataODP()->result();
        $result['getPDP']                   = $this->dataModelHome->getDataPDP()->result();
        $result['getPemudik']               = $this->dataModelHome->getDataPemudik()->result();
        $result['getPositif']               = $this->dataModelHome->getDataPositif()->result();
        $result['getMeninggal']             = $this->dataModelHome->getDataMeninggal()->result();
        $result['getSembuh']                = $this->dataModelHome->getDataSembuh()->result();
        $result['getDataPemudik']           = $this->dataModelHome->getPemudik();
        $result['getDataKarantinaSelesai']  = $this->dataModelHome->getKarantinaSelesai()->result();
        $result['getDataMasihKarantina']  = $this->dataModelHome->getKarantinaBelumSelesai()->result();
        $result['getTotalPerRw']            = $this->dataModelHome->getDataPerRw()->result();
        $result['getTotalPerRwPdp']            = $this->dataModelHome->getDataPerRwPdp()->result();


        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();
    

        $this->load->view('backend/vw_home',$result);
    }

    public function text_berjalan()
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_text_berjalan';

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();

        $this->load->view('backend/vw_home',$result);

    }

    public function histori_aktifitas()
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_histori';
        $result['getHistori']   = $this->dataModelHome->getDataHistori()->result();

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();
        

        $this->load->view('backend/vw_home',$result);

    }

    public function master_data()
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_masterdata';
        $result['getMasterData'] = $this->dataModelHome->getDataMaster()->result();

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();
        

        $this->load->view('backend/vw_home', $result);
    }

}

/* End of file Home.php */
