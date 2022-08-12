<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_dashboard');
		$this->load->library('form_validation');
		if (!$this->session->userdata('nama_pengguna')) {
			redirect('publik');
		}
	}
	public function index()
	{

		$data['title'] = 'Dashboard';
		$data['mesjid'] = $this->model_dashboard->getAllMesjid();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('view_dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$namaMesjid = $this->uri->segment(4);
		$namaMesjid = preg_replace("/[^a-zA-Z']/", " ", $namaMesjid);
		$data['title'] = $namaMesjid;
		$data['mesjid'] = $this->model_dashboard->getDetail($id);
		$data['kajian'] = $this->model_dashboard->getAllDetail();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('view_dashboardDetail', $data);
		$this->load->view('templates/footer');
	}
}
