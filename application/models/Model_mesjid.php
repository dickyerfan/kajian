<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_mesjid extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('mesjid')->result();
    }

    public function tambahData()
    {
        $data = [
            "nama_mesjid" => $this->input->post('nama_mesjid', true),
            "alamat_mesjid" => $this->input->post('alamat_mesjid', true),
            "lokasi_mesjid" => $this->input->post('lokasi_mesjid', true),
            "foto_mesjid" => $this->input->post('foto_mesjid', true)
        ];
        $this->db->insert('mesjid', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id_mesjid', $id);
        $this->db->delete('mesjid');
    }

    public function getIdmesjid($id)
    {
        return $this->db->get_where('mesjid', ['id_mesjid' => $id])->row();
    }

    public function updateData()
    {

        $data = [
            "nama_mesjid" => $this->input->post('nama_mesjid', true),
            "alamat_mesjid" => $this->input->post('alamat_mesjid', true),
            "lokasi_mesjid" => $this->input->post('lokasi_mesjid', true),
            "foto_mesjid" => $this->input->post('foto_mesjid', true)
        ];
        $this->db->where('id_mesjid', $this->input->post('id'));
        $this->db->update('mesjid', $data);
    }
}
