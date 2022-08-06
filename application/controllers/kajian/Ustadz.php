<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ustadz extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_ustadz');
        $this->load->library('form_validation');
        // if (!$this->session->userdata('nama_pengguna')) {
        //     redirect('auth');
        // }
    }
    public function index()
    {
        $data['title'] = 'Daftar Ustadz';
        $data['ustadz'] = $this->model_ustadz->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('ustadz/view_ustadz', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Ustadz';
        $this->form_validation->set_rules('nama_ustadz', 'Nama Ustadz', 'required|trim');

        $this->form_validation->set_message('required', '%s Harus di isi');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('ustadz/view_tambahUstadz', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> data Ustadz Berhasil di simpan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );

            $this->model_ustadz->tambahData();
            redirect('kajian/Ustadz');
        }
    }

    public function edit($id)
    {
        $data['ustadz'] = $this->model_ustadz->getIdUstadz($id);
        $data['title'] = 'Form Edit Ustadz';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('ustadz/view_editUstadz', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->model_ustadz->updateData();
        if ($this->db->affected_rows() <= 0) {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
                  <strong>Maaf,</strong> tidak ada perubahan data
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  </button>
                </div>'
            );
            redirect('kajian/Ustadz');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> Data berhasil di update
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );
            redirect('kajian/Ustadz');
        }
    }

    public function hapus($id)
    {
        $this->model_ustadz->hapusData($id);
        $this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
        <strong>Sukses,</strong> data Ustadz Berhasil di hapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('kajian/Ustadz');
    }
}
