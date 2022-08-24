<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_dashboard');
        $this->load->library('form_validation');
        // if (!$this->session->userdata('nama_pengguna')) {
        //     redirect('publik');
        // }
    }

    public function index()
    {

        $data['title'] = 'Daftar Kajian Ilmiyah Bondowoso';
        $data['mesjid'] = $this->model_dashboard->getAllMesjid();
        $data['kajian'] = $this->model_dashboard->getAllDetail();
        $this->load->view('view_publik', $data);
    }

    public function detail($id)
    {
        $namaMesjid = $this->uri->segment(4);
        $namaMesjid = preg_replace("/[^a-zA-Z']/", " ", $namaMesjid);
        $data['title'] = $namaMesjid;
        $data['mesjid'] = $this->model_dashboard->getDetail($id);
        $data['kajian'] = $this->model_dashboard->getAllDetail();
        $this->load->view('view_publikDetail', $data);
    }
}
