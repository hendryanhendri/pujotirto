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

        $data['title'] = 'Form Kritik & Saran';
		$cap = $this->buat_captcha();
		$data['cap_img'] = $cap['image'];
		$this->session->set_userdata('kode_captcha', $cap['word']);

        $this->load->view('vw_dashboard', $data);

	}
	
	public function covid()
	{
		$data['content']    = 'front/content_info_covid';

		$this->load->view('vw_dashboard', $data);
	}

    public function buat_captcha()
	{
		$vals = array(
		'img_path' => './captcha/',
		'img_url' => base_url().'captcha/',
		'font_path' => './font/timesbd.ttf',
		'img_width' => '150',
		'img_height' => 30,
		'expiration' => 60
		);
		$cap = create_captcha($vals);
		return $cap;
    }
    
    public function post()
	{
		$this->form_validation->set_rules('kode_captcha', 'Kode Captcha', 'required|callback_cek_captcha');
		$this->form_validation->set_error_delimiters('<div style="border: 1px solid: #999999; background-color: #ffff99;">', '</div>');
		
		if ($this->form_validation->run() === FALSE) 
		{
            $data['content']    = 'front/content_saran_masukan';
			$data['title'] = 'Form Captcha';	
			$cap = $this->buat_captcha();
			$data['cap_img'] = $cap['image'];
			$this->session->set_userdata('kode_captcha', $cap['word']);
			
			$this->load->view('vw_dashboard', $data);
		} else  {
            $data['content']  = 'front/content_saran_masukan';
			$data['title'] = 'Captcha Benar!';
			$this->session->unset_userdata('kode_captcha');
			$this->load->view('vw_dashboard', $data);
		}
	}
	
	public function cek_captcha($input)
	{
		if($input === $this->session->userdata('kode_captcha')){
			return TRUE;
		} else {
			$this->form_validation->set_message('cek_captcha', '%s yang anda input salah!');
			return FALSE;
		}
	}

}

/* End of file Info.php */
