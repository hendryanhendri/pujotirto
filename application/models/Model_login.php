<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function getAuthLogin($username, $password)
    {
        $pass   =  md5($password);
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $query  = $this->db->get('t_users');
        if($query->num_rows()>0)
        {
            foreach ($query->result() as $value) {
               $_sess = array(
                   'username' => $value->username,
                   'fullname' => $value->fullname,
                   'level' => $value->level,
                   'email'    => $value->email,
                   'phone'    => $value->phone,
               );
               $this->session->set_userdata($_sess);
               redirect('home');
            }
        }else{
            $this->session->set_flashdata('info', '<div class="col-sm-12"><div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="mdi mdi-alert"></i> Salah!</h5>
            username dan password anda salah! 
            </div></div>');
            redirect('pujotirto');
        }

    }

    public function getLogoutFunction()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('info', '<div class="page-contentbar"><div id="page-right-content"><div class="container">
        <div class="col-sm-12"><div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="mdi mdi-alert"></i> Terimakasih!</h5>
        Terimakasih, anda sudah log out !
        </div></div></div></div></div>');
        
		redirect('pujotirto');
    }



}

/* End of file Model_login.php */
