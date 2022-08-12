<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kajian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kajian');
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama_pengguna')) {
            redirect('publik');
        }
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

    public function tambah()
    {
        $data['title'] = 'Form Tambah Kajian';
        $data['ustadz'] = $this->db->get('ustadz')->result();
        $data['kitab'] = $this->db->get('kitab')->result();
        $data['waktu'] = $this->db->get('waktu')->result();
        $data['mesjid'] = $this->db->get('mesjid')->result();

        $this->form_validation->set_rules('id_ustadz', 'Nama Ustadz', 'required|trim');
        $this->form_validation->set_rules('id_kitab', 'Judul Kitab', 'required|trim');
        $this->form_validation->set_rules('id_waktu', 'Waktu Kajian', 'required|trim');
        $this->form_validation->set_rules('id_mesjid', 'Nama Mesjid', 'required|trim');
        $this->form_validation->set_rules('hari_kajian', 'Hari Kajian', 'required|trim');
        $this->form_validation->set_rules('waktu_kajian', 'Waktu Kajian', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
        $this->form_validation->set_message('required', '%s Harus di isi');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('kajian/view_kajianTambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> Data Kajian Berhasil di simpan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );
            $data['kajian'] = $this->model_kajian->tambahData();
            redirect('kajian/kajian');
        }
    }

    public function edit($id_kajian)
    {
        $data['kajian'] = $this->model_kajian->getIdkajian($id_kajian);
        $data['title'] = 'Form Edit Kajian';
        $data['ustadz'] = $this->db->get('ustadz')->result();
        $data['kitab'] = $this->db->get('kitab')->result();
        $data['waktu'] = $this->db->get('waktu')->result();
        $data['mesjid'] = $this->db->get('mesjid')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kajian/view_kajianEdit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->model_kajian->updateData();
        if ($this->db->affected_rows() <= 0) {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
                  <strong>Maaf,</strong> tidak ada perubahan data
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  </button>
                </div>'
            );
            redirect('kajian/kajian');
        } else {
            $this->session->set_flashdata(
                'info',
                '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:50%;">
                <strong>Sukses,</strong> Data Kajian berhasil di update
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>'
            );
            redirect('kajian/kajian');
        }
    }

    public function hapus($id)
    {
        $this->model_kajian->hapusData($id);
        $this->session->set_flashdata(
            'info',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:50%;">
            <strong>Sukses,</strong> Data Kajian berhasil di hapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>'
        );
        redirect('kajian/kajian');
    }
}
