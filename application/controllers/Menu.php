<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_menu', 'dataModelMenu');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/menu/vw_content_menu';

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();

        $this->load->view('backend/vw_home', $result);
    }

    public function add_sub_menu()
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/menu/vw_content_submenu';

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();

        $this->load->view('backend/vw_home', $result);

    }

}

/* End of file Menu.php */
