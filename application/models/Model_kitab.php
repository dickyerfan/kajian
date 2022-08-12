<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kitab extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('kitab')->result();
    }

    public function tambahData()
    {
        $data = [
            "nama_kitab" => $this->input->post('nama_kitab', true),
            "ket_kitab" => $this->input->post('ket_kitab', true)
        ];
        $this->db->insert('kitab', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id_kitab', $id);
        $this->db->delete('kitab');
    }

    public function getIdkitab($id)
    {
        return $this->db->get_where('kitab', ['id_kitab' => $id])->row();
    }

    public function updateData()
    {

        $data = [
            "nama_kitab" => $this->input->post('nama_kitab', true),
            "ket_kitab" => $this->input->post('ket_kitab', true)
        ];
        $this->db->where('id_kitab', $this->input->post('id'));
        $this->db->update('kitab', $data);
    }
}
