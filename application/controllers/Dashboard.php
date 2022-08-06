<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['mesjid'] = $this->db->get('mesjid')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('view_dashboard', $data);
		$this->load->view('templates/footer');
	}
}
