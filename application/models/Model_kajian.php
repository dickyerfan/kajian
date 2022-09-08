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
        $this->db->join('mesjid', 'mesjid.id_mesjid = jadwal_kajian.id_mesjid');
        return $this->db->get()->result();
    }

    public function tambahData()
    {
        $data = [
            "id_ustadz" => $this->input->post('id_ustadz', true),
            "id_kitab" => $this->input->post('id_kitab', true),
            "id_waktu" => $this->input->post('id_waktu', true),
            "id_mesjid" => $this->input->post('id_mesjid', true),
            "hari_kajian" => $this->input->post('hari_kajian', true),
            "waktu_kajian" => $this->input->post('waktu_kajian', true),
            "keterangan" => $this->input->post('keterangan', true),
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
            "id_ustadz" => $this->input->post('id_ustadz', true),
            "id_kitab" => $this->input->post('id_kitab', true),
            "id_waktu" => $this->input->post('id_waktu', true),
            "id_mesjid" => $this->input->post('id_mesjid', true),
            "hari_kajian" => $this->input->post('hari_kajian', true),
            "waktu_kajian" => $this->input->post('waktu_kajian', true),
            "keterangan" => $this->input->post('keterangan', true),
            "status_aktif" => $this->input->post('aktif', true)
        ];
        $this->db->where('id_kajian', $this->input->post('id_kajian'));
        $this->db->update('jadwal_kajian', $data);
    }
}
