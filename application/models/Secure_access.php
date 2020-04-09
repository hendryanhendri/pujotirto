<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Secure_access extends CI_Model {

    public function getsecurity()
	{
		$username = $this->session->userdata('username');
		if(empty($username))
		{
			$this->session->sess_destroy();
			redirect('dashboard');
		}
	}


}

/* End of file Secure_access.php */
