<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_ustadz extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('ustadz')->result();
    }

    public function tambahData()
    {
        $data = [
            "nama_ustadz" => $this->input->post('nama_ustadz', true),
            "ket_ustadz" => $this->input->post('ket_ustadz', true)
        ];
        $this->db->insert('ustadz', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id_ustadz', $id);
        $this->db->delete('ustadz');
    }

    public function getIdustadz($id)
    {
        return $this->db->get_where('ustadz', ['id_ustadz' => $id])->row();
    }

    public function updateData()
    {

        $data = [
            "nama_ustadz" => $this->input->post('nama_ustadz', true),
            "ket_ustadz" => $this->input->post('ket_ustadz', true)
        ];
        $this->db->where('id_ustadz', $this->input->post('id'));
        $this->db->update('ustadz', $data);
    }
}
