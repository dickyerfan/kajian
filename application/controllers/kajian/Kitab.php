<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kitab extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kitab');
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama_pengguna')) {
            redirect('publik');
        }
    }
    public function index()
    {
        $data['title'] = 'Daftar kitab';
        $data['kitab'] = $this->model_kitab->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kitab/view_kitab', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah kitab';
        $this->form_validation->set_rules('nama_kitab', 'Nama kitab', 'required|trim');

        $this->form_validation->set_message('required', '%s Harus di isi');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('kitab/view_tambahkitab', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> data kitab Berhasil di simpan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );

            $this->model_kitab->tambahData();
            redirect('kajian/kitab');
        }
    }

    public function edit($id)
    {
        $data['kitab'] = $this->model_kitab->getIdkitab($id);
        $data['title'] = 'Form Edit kitab';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kitab/view_editkitab', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->model_kitab->updateData();
        if ($this->db->affected_rows() <= 0) {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
                  <strong>Maaf,</strong> tidak ada perubahan data
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  </button>
                </div>'
            );
            redirect('kajian/kitab');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> Data berhasil di update
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );
            redirect('kajian/kitab');
        }
    }

    public function hapus($id)
    {
        $this->model_kitab->hapusData($id);
        $this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
        <strong>Sukses,</strong> data kitab Berhasil di hapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('kajian/kitab');
    }
}
