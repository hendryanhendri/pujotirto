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
        $query  = $this->db->get('t)users');
        if($query->num_rows()>0)
        {
            foreach ($query->result() as $value) {
               $_sess = array(
                   'username' => $value->username,
                   'fullname' => $value->fullname,
                   'email'    => $value->email,
                   'phone'    => $value->phone,
               );
               $this->session->set_userdata($_sess);
               redirect('home');
            }
        }else{
            $this->session->set_flashdata('info', 'username dan password salah!');
            redirect('pujotirto');
        }

    }

}

/* End of file Model_login.php */
