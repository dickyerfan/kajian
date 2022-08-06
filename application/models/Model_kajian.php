<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kajian extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('jadwal_kajian');
        $this->db->join('ustadz', 'ustadz.id_ustadz = jadwal_kajian.id_ustadz');
        $this->db->join('kitab', 'kitab.id_kitab = jadwal_kajian.id_kitab');
        $this->db->join('waktu', 'waktu.id_waktu = jadwal_kajian.id_waktu');
        return $this->db->get()->result();
    }

    public function tambahData()
    {
        $data = [
            "nama_kajian" => $this->input->post('nama_kajian', true),
        ];
        $this->db->insert('jadwal_kajian', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id_kajian', $id);
        $this->db->delete('jadwal_kajian');
    }

    public function getIdkajian($id)
    {
        return $this->db->get_where('jadwal_kajian', ['id_kajian' => $id])->row();
    }

    public function updateData()
    {

        $data = [
            "nama_kajian" => $this->input->post('nama_kajian', true),
        ];
        $this->db->where('id_kajian', $this->input->post('id'));
        $this->db->update('jadwal_kajian', $data);
    }
}
