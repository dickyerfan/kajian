<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kajian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kajian');
        $this->load->library('form_validation');
        // if (!$this->session->userdata('nama_pengguna')) {
        //     redirect('auth');
        // }
    }
    public function index()
    {
        $data['title'] = 'Daftar Kajian';
        $data['kajian'] = $this->model_kajian->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kajian/view_kajian', $data);
        $this->load->view('templates/footer');
    }
}
