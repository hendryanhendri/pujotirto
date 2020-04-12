<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_add_users','getModelUsers');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index($id='')
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_users';

        $result['getUsers'] = $this->getModelUsers->getDataUsers()->result();

        $this->load->view('backend/vw_home', $result);
        
    }

    public function saveDataUsers($id='')
    {
        $this->Secure_access->getsecurity();
        $getEncrypt = $this->input->post('password');
        $getId      = $this->getModelUsers->createUsersId();

        $data_users = array(
            'id_users'      => $getId,
            'username'      => $this->input->post('username'),
            'password'      => md5($getEncrypt),
            'fullname'      => $this->input->post('fullname'),
            'jenkel'        => $this->input->post('jenkel'),
            'level'         => 'Dewa',
            'email'         => $this->input->post('email'),
            'phone'         => $this->input->post('phone'),
        );
        $insert = $this->getModelUsers->getInsertDataUsers($data_users);

        $data_aktifitas =array(
            'nik'           => $getId,
            'fullname'      => $this->session->userdata('fullname'),
            'form_'         => 'FORM ADD USERS',
            'action_'       => 'ADD',
            'created_date'  => date("Y-m-d H:i:s"),
        );
        $insert_aktifitas = $this->getModelUsers->getInsertDataAktifitas($data_aktifitas);

        echo json_encode(array("status" => TRUE));

        $this->session->set_flashdata('info', '<center><div class="col-sm-12 m-t-20"><div class="alert alert-icon alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <i class="mdi mdi-check-all"></i>
        <strong>Sukses!</strong> Yeay data berhasil disimpan !
    </div></div><center>');

        redirect('add_users');

    }

    public function ajax_edit($id){
        $this->Secure_access->getsecurity();
        $data = $this->getModelUsers->updateById($id);
        echo json_encode($data);
      }

    public function ajax_delete($id)
    {
        $this->getModelUsers->DeletedByIdUsers($id);
        echo json_encode(array("status" => TRUE));

        $data_aktifitas =array(
            'nik'           => $id,
            'fullname'      => $this->session->userdata('fullname'),
            'form_'         => 'FORM DELETE USERS',
            'action_'       => 'ADD',
            'created_date'  => date("Y-m-d H:i:s"),
        );
        $insert_aktifitas = $this->getModelUsers->getInsertDataAktifitas($data_aktifitas);

        $this->session->set_flashdata('info', '<center><div class="col-sm-12 m-t-20"><div class="alert alert-icon alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <i class="mdi mdi-check-all"></i>
        <strong>Sukses!</strong> Yeay data berhasil dihapus !
    </div></div><center>');

    }

}

/* End of file Add_users.php */
