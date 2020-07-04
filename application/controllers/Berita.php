<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
    

    public function index()
    {
        $data['content']    = 'front/content_berita_terkini';
        $data['getBerita']  = array($this->getBerita());

        

        $this->load->view('vw_dashboard', $data);
        
    }

    function getBerita()
    {
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL             => "http://newsapi.org/v2/top-headlines?country=id&apiKey=0dfd711c82324515a4f0d90160b9b434",
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_TIMEOUT         => 30,
    CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST   => "GET",
    CURLOPT_HTTPHEADER      => array(
        "cache-control: no-cache"
    ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $response = json_decode($response, true); //because of true, it's in an array
    //  echo $response['source']['title'];
    }
    

}

/* End of file Berita.php */
