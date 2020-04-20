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

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();
        
        $this->load->view('backend/vw_home');
    }

    public function add_perantau($id='')
    {
        $this->Secure_access->getsecurity();
        $result['content']      = 'backend/content/vw_content_perantau';
        
        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();

        $result['getIdAuto']    = $this->dataModelPerantau->createAutoId();   
        $result['getODP']       = $this->dataModelPerantau->getDataOdp()->result();
        $this->load->view('backend/vw_home', $result);
    }

    public function saveDataPerantau($id='')
    {
        $this->Secure_access->getsecurity();

        $data_karantina =array(
            'nik'               => $this->input->post('nik'),
            'no_ktp'            => $this->input->post('no_ktp'),
            'start_karantina'   => date("Y-m-d", strtotime($this->input->post('start_karantina'))),
            'finish_karantina'  => date("Y-m-d", strtotime($this->input->post('finish_karantina'))),
            'status_karantina'  => 'ON KARANTINA', 
        );
        $insert_karantina = $this->dataModelPerantau->getInsertDataKarantina($data_karantina);
        
        $data_perantau   =array(
            'nik'               => $this->input->post('nik'),
            'no_ktp'            => $this->input->post('no_ktp'),
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

        redirect('perantau/add_perantau');

    }

    public function ajax_edit($id){
        $this->Secure_access->getsecurity();
        $data = $this->dataModelPerantau->updateById($id);
        echo json_encode($data);
      }

    public function add_non_perantau($id='')
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_non_perantau';

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();

        $result['getIdAuto']    = $this->dataModelPerantau->createAutoId();  
        $result['getPDP']   = $this->dataModelPerantau->getDataPdp()->result();
        $this->load->view('backend/vw_home', $result);
    }

    public function saveDataNonPerantau($id='')
    {
        $this->Secure_access->getsecurity();

        $data_karantina =array(
            'nik'               => $this->input->post('nik'),
            'no_ktp'                => $this->input->post('no_ktp'),
            'start_karantina'   => date("Y-m-d", strtotime($this->input->post('start_karantina'))),
            'finish_karantina'  => date("Y-m-d", strtotime($this->input->post('finish_karantina'))),
            'status_karantina'  => $this->input->post('status_karantina'), 
            'fasilitas_kesehatan'   => $this->input->post('fasilitas_kesehatan'),
        );
        $insert_karantina = $this->dataModelPerantau->getInsertDataKarantina($data_karantina);
        
        $data_perantau   =array(
            'nik'                   => $this->input->post('nik'),
            'no_ktp'                => $this->input->post('no_ktp'),
            'nama_lengkap'          => $this->input->post('nama_lengkap'),
            'jenkel'                => $this->input->post('jenkel'),
            'rt'                    => $this->input->post('rt'), 
            'rw'                    => $this->input->post('rw'),
            'ttl'                   => date("Y-m-d", strtotime($this->input->post('ttl'))), 
            'dusun'                 => $this->input->post('dusun'),
            'kelurahan'             => $this->input->post('kelurahan'),
            'kecamatan'             => $this->input->post('kecamatan'),
            'kabupaten'             => $this->input->post('kabupaten'),
            'no_telf'               => $this->input->post('no_telf'),
            'status_'               => 'PDP',
            'source_data'           => 'NON PERANTAU',
            'keterangan'            => $this->input->post('keterangan'),
            'tanggal_periksa'       => date("Y-m-d", strtotime($this->input->post('tanggal_periksa'))),
            'created_by'            => $this->session->userdata('fullname'),
            'created_date'          => date("Y-m-d H:i:s") 
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

    public function UpdateDataOdpToPdp($id='')
    {
        $this->Secure_access->getsecurity();

        $data_karantina =array(
            'nik'               => $this->input->post('nik'),
            'no_ktp'            => $this->input->post('no_ktp'),
            'start_karantina'   => date("Y-m-d", strtotime($this->input->post('start_karantina'))),
            'finish_karantina'  => date("Y-m-d", strtotime($this->input->post('finish_karantina'))),
            'status_karantina'  => $this->input->post('status_karantina'), 
            'fasilitas_kesehatan'   => $this->input->post('fasilitas_kesehatan'),
        );
        $this->dataModelPerantau->UpdateKarantina(array('nik' => $this->input->post('nik')), $data_karantina);
        
        $data_perantau   =array(
            'nik'                   => $this->input->post('nik'),
            'no_ktp'                => $this->input->post('no_ktp'),
            'nama_lengkap'          => $this->input->post('nama_lengkap'),
            'jenkel'                => $this->input->post('jenkel'),
            'rt'                    => $this->input->post('rt'), 
            'rw'                    => $this->input->post('rw'),
            'dusun'                 => $this->input->post('dusun'),
            'kelurahan'             => $this->input->post('kelurahan'),
            'kecamatan'             => $this->input->post('kecamatan'),
            'kabupaten'             => $this->input->post('kabupaten'),
            'no_telf'               => $this->input->post('no_telf'),
            'status_'               => 'PDP',
            'keterangan'            => $this->input->post('keterangan'),
            'tanggal_periksa'       => date("Y-m-d", strtotime($this->input->post('tanggal_periksa'))),
            'created_by'            => $this->session->userdata('fullname'),
            'created_date'          => date("Y-m-d H:i:s") 
        );
        $this->dataModelPerantau->UpdateOdpToPpd(array('nik' => $this->input->post('nik')), $data_perantau);

        $data_aktifitas =array(
            'nik'           => $this->input->post('nik'),
            'fullname'      => $this->session->userdata('fullname'),
            'form_'         => 'FORM UPDATE TO PDP',
            'action_'       => 'UPDATED',
            'created_date'  => date("Y-m-d H:i:s"),
        );
        $insert_aktifitas = $this->dataModelPerantau->getInsertDataAktifitas($data_aktifitas);

        echo json_encode(array("status" => TRUE));
        $this->session->set_flashdata('info', '<center><div class="col-sm-12 m-t-20"><div class="alert alert-icon alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <i class="mdi mdi-check-all"></i>
        <strong>Sukses!</strong> Yeay data berhasil diupdate !
    </div></div><center>');

        redirect('perantau/add_perantau');

    }

    public function UpdateDataPerantau($id='')
    {
        $this->Secure_access->getsecurity();

        $data_karantina =array(
            'nik'               => $this->input->post('nik'),
            'no_ktp'            => $this->input->post('no_ktp'),
        );
        $this->dataModelPerantau->UpdateKarantina(array('nik' => $this->input->post('nik')), $data_karantina);
        
        $data_perantau   =array(
            'no_ktp'            => $this->input->post('no_ktp'),
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
            'updated_by'        => $this->session->userdata('fullname'),
            'updated_date'      => date("Y-m-d H:i:s") 
        );
        $this->dataModelPerantau->UpdateDataPerantau(array('nik' => $this->input->post('nik')), $data_perantau);

        $data_aktifitas =array(
            'nik'           => $this->input->post('nik'),
            'fullname'      => $this->session->userdata('fullname'),
            'form_'         => 'FORM UPDATE DATA',
            'action_'       => 'UPDATED',
            'created_date'  => date("Y-m-d H:i:s"),
        );
        $insert_aktifitas = $this->dataModelPerantau->getInsertDataAktifitas($data_aktifitas);

        echo json_encode(array("status" => TRUE));
        $this->session->set_flashdata('info', '<center><div class="col-sm-12 m-t-20"><div class="alert alert-icon alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <i class="mdi mdi-check-all"></i>
        <strong>Sukses!</strong> Yeay data berhasil diupdate !
    </div></div><center>');

        redirect('perantau/add_perantau');



    }

    public function add_data_tamu($id='')
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_tamu';
        $result['dataTamu'] = $this->dataModelPerantau->getDataTamu()->result();

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();

        $this->load->view('backend/vw_home', $result);
    }

    public function saveDataTamu($id='')
    {
        $this->Secure_access->getsecurity();
        $data_tamu = array(
            'nik'               => $this->input->post('nik'),
            'no_ktp'                => $this->input->post('no_ktp'),
            'nama_lengkap'      => $this->input->post('nama_lengkap'),
            'jenkel'            => $this->input->post('jenkel'),
            'nomor_hp_tamu'     => $this->input->post('nomor_hp_tamu'),
            'kelurahan_tamu'    => $this->input->post('kelurahan_tamu'),
            'dusun_tamu'        => $this->input->post('dusun_tamu'),
            'rw_tamu'           => $this->input->post('rw_tamu'),
            'rt_tamu'           => $this->input->post('rt_tamu'),
            'kecamatan_tamu'    => $this->input->post('kecamatan_tamu'),
            'kabupaten_tamu'    => $this->input->post('kabupaten_tamu'),
            'nama_tujuan'       => $this->input->post('nama_tujuan'),
            'lama_berkunjung'   => $this->input->post('lama_berkunjung'),
            'tujuan_berkunjung' => $this->input->post('tujuan_berkunjung'),
            'created_by'        => $this->session->userdata('fullname'),
            'created_date'      => date("Y-m-d H:i:s"),
        );
        $insert = $this->dataModelPerantau->getInsertDataTamu($data_tamu);

        $data_aktifitas =array(
            'nik'           => $this->input->post('nik'),
            'fullname'      => $this->session->userdata('fullname'),
            'form_'         => 'FORM ADD TAMU',
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

        redirect('perantau/add_data_tamu');
    }

    public function add_data_positif()
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_data_positif';

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();

        $this->load->view('backend/vw_home', $result);

    }

    public function add_data_meninggal()
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_data_meninggal';

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();

        $this->load->view('backend/vw_home', $result);

    }

    public function add_data_sembuh()
    {
        $this->Secure_access->getsecurity();
        $result['content']  = 'backend/content/vw_content_data_sembuh';

        $this->db->select('menu, icon');
        $this->db->from('t_menu');
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->order_by('id_menu', 'asc');
        $result['datamenu']		= $this->db->get();

        $this->load->view('backend/vw_home', $result);

    }

}

/* End of file Perantau.php */
