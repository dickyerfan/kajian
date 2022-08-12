<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waktu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_waktu');
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama_pengguna')) {
            redirect('publik');
        }
    }
    public function index()
    {
        $data['title'] = 'Daftar waktu';
        $data['waktu'] = $this->model_waktu->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('waktu/view_waktu', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah waktu';
        $this->form_validation->set_rules('nama_waktu', 'Nama waktu', 'required|trim');

        $this->form_validation->set_message('required', '%s Harus di isi');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('waktu/view_tambahwaktu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> data waktu Berhasil di simpan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );

            $this->model_waktu->tambahData();
            redirect('kajian/waktu');
        }
    }

    public function edit($id)
    {
        $data['waktu'] = $this->model_waktu->getIdwaktu($id);
        $data['title'] = 'Form Edit waktu';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('waktu/view_editwaktu', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->model_waktu->updateData();
        if ($this->db->affected_rows() <= 0) {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
                  <strong>Maaf,</strong> tidak ada perubahan data
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  </button>
                </div>'
            );
            redirect('kajian/waktu');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> Data berhasil di update
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );
            redirect('kajian/waktu');
        }
    }

    public function hapus($id)
    {
        $this->model_waktu->hapusData($id);
        $this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
        <strong>Sukses,</strong> data waktu Berhasil di hapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('kajian/waktu');
    }
}
