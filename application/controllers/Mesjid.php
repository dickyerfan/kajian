<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mesjid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_mesjid');
        $this->load->library('form_validation');
        // if (!$this->session->userdata('nama_pengguna')) {
        //     redirect('auth');
        // }
    }
    public function index()
    {
        $data['title'] = 'Daftar Tempat Kajian';
        $data['mesjid'] = $this->model_mesjid->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('mesjid/view_mesjid', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Tempat Kajian';
        $this->form_validation->set_rules('nama_mesjid', 'Tempat Kajian', 'required|trim');
        $this->form_validation->set_rules('alamat_mesjid', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('lokasi_mesjid', 'Peta Lokasi', 'required|trim');
        $this->form_validation->set_rules('foto_mesjid', 'Foto', 'required|trim');
        $this->form_validation->set_message('required', '%s Harus di isi');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('mesjid/view_tambahMesjid', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> Data Tempat Kajian Berhasil di simpan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );

            $this->model_mesjid->tambahData();
            redirect('mesjid');
        }
    }

    public function edit($id)
    {
        $data['mesjid'] = $this->model_mesjid->getIdmesjid($id);
        $data['title'] = 'Form Edit Tempat Kajian';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('mesjid/view_editMesjid', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->model_mesjid->updateData();
        if ($this->db->affected_rows() <= 0) {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
                  <strong>Maaf,</strong> tidak ada perubahan data
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  </button>
                </div>'
            );
            redirect('mesjid');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> Data Tempat Kajian berhasil di update
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );
            redirect('mesjid');
        }
    }

    public function hapus($id)
    {
        $this->model_mesjid->hapusData($id);
        $this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
        <strong>Sukses,</strong> Data Tempat Kajian Berhasil di hapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('mesjid');
    }
}
