<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perantau extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_perantau', 'dataModelPerantau');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index($id='')
    {
        $this->Secure_access->getsecurity();
        
        $this->load->view('backend/vw_home');
    }

    public function add_perantau($id='')
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_perantau';
        $this->load->view('backend/vw_home', $result);
    }

    public function saveDataPerantau($id='')
    {
        $this->Secure_access->getsecurity();

        $data_karantina =array(
            'nik'               => $this->input->post('nik'),
            'start_karantina'   => date("Y-m-d", strtotime($this->input->post('start_karantina'))),
            'finish_karantina'  => date("Y-m-d", strtotime($this->input->post('finish_karantina'))),
            'status_karantina'  => 'ON KARANTINA', 
        );
        $insert_karantina = $this->dataModelPerantau->getInsertDataKarantina($data_karantina);
        
        $data_perantau   =array(
            'nik'               => $this->input->post('nik'),
            'nama_lengkap'      => $this->input->post('nama_lengkap'),
            'jenkel'            => $this->input->post('jenkel'),
            'rt'                => $this->input->post('rt'), 
            'rw'                => $this->input->post('rw'),
            'ttl'               => date("Y-m-d", strtotime($this->input->post('ttl'))), 
            'dusun'             => $this->input->post('dusun'),
            'kelurahan'         => $this->input->post('kelurahan'),
            'kecamatan'         => $this->input->post('kecamatan'),
            'kabupaten'         => $this->input->post('kabupaten'),
            'no_telf'           => $this->input->post('no_telf'),
            'status_'           => 'ODP',
            'source_data'       => 'PERANTAU',
            'kota_perantau'     => $this->input->post('kota_perantau'),
            'keterangan'        => $this->input->post('keterangan'),
            'tanggal_pulang'    => date("Y-m-d", strtotime($this->input->post('tanggal_pulang'))),
            'created_by'        => $this->session->userdata('fullname'),
            'created_date'      => date("Y-m-d H:i:s") 
        );
        $insert = $this->dataModelPerantau->getInsertData($data_perantau);

        $data_aktifitas =array(
            'nik'           => $this->input->post('nik'),
            'fullname'      => $this->session->userdata('fullname'),
            'form_'         => 'FORM ADD PERANTAU',
            'action_'        => 'ADD',
            'created_date'  => date("Y-m-d H:i:s"),
        );
        $insert_aktifitas = $this->dataModelPerantau->getInsertDataAktifitas($data_aktifitas);

        echo json_encode(array("status" => TRUE));
        $this->session->set_flashdata('info', '<center><div class="col-sm-12 m-t-20"><div class="alert alert-icon alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <i class="mdi mdi-check-all"></i>
        <strong>Sukses!</strong> Yeay data berhasil disimpan !
    </div></div><center>');

        redirect('perantau/add_perantau');

    }

    public function add_non_perantau($id='')
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_non_perantau';
        $this->load->view('backend/vw_home', $result);
    }

    public function saveDataNonPerantau($id='')
    {
        $this->Secure_access->getsecurity();

        $data_karantina =array(
            'nik'               => $this->input->post('nik'),
            'start_karantina'   => date("Y-m-d", strtotime($this->input->post('start_karantina'))),
            'finish_karantina'  => date("Y-m-d", strtotime($this->input->post('finish_karantina'))),
            'status_karantina'  => $this->input->post('status_karantina'), 
        );
        $insert_karantina = $this->dataModelPerantau->getInsertDataKarantina($data_karantina);
        
        $data_perantau   =array(
            'nik'               => $this->input->post('nik'),
            'nama_lengkap'      => $this->input->post('nama_lengkap'),
            'jenkel'            => $this->input->post('jenkel'),
            'rt'                => $this->input->post('rt'), 
            'rw'                => $this->input->post('rw'),
            'ttl'               => date("Y-m-d", strtotime($this->input->post('ttl'))), 
            'dusun'             => $this->input->post('dusun'),
            'kelurahan'         => $this->input->post('kelurahan'),
            'kecamatan'         => $this->input->post('kecamatan'),
            'kabupaten'         => $this->input->post('kabupaten'),
            'no_telf'           => $this->input->post('no_telf'),
            'status_'           => 'PDP',
            'source_data'       => 'NON PERANTAU',
            'keterangan'        => $this->input->post('keterangan'),
            'tanggal_periksa'   => date("Y-m-d", strtotime($this->input->post('tanggal_periksa'))),
            'created_by'        => $this->session->userdata('fullname'),
            'created_date'      => date("Y-m-d H:i:s") 
        );
        $insert = $this->dataModelPerantau->getInsertData($data_perantau);

        $data_aktifitas =array(
            'nik'           => $this->input->post('nik'),
            'fullname'      => $this->session->userdata('fullname'),
            'form_'         => 'FORM ADD NON PERANTAU',
            'action_'       => 'ADD',
            'created_date'  => date("Y-m-d H:i:s"),
        );
        $insert_aktifitas = $this->dataModelPerantau->getInsertDataAktifitas($data_aktifitas);

        echo json_encode(array("status" => TRUE));
        $this->session->set_flashdata('info', '<center><div class="col-sm-12 m-t-20"><div class="alert alert-icon alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <i class="mdi mdi-check-all"></i>
        <strong>Sukses!</strong> Yeay data berhasil disimpan !
    </div></div><center>');

        redirect('perantau/add_non_perantau');

    }

}

/* End of file Perantau.php */
