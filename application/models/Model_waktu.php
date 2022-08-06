<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_waktu extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('waktu')->result();
    }

    public function tambahData()
    {
        $data = [
            "nama_waktu" => $this->input->post('nama_waktu', true),
        ];
        $this->db->insert('waktu', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id_waktu', $id);
        $this->db->delete('waktu');
    }

    public function getIdwaktu($id)
    {
        return $this->db->get_where('waktu', ['id_waktu' => $id])->row();
    }

    public function updateData()
    {

        $data = [
            "nama_waktu" => $this->input->post('nama_waktu', true),
        ];
        $this->db->where('id_waktu', $this->input->post('id'));
        $this->db->update('waktu', $data);
    }
}
