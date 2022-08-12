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
        $foto = $_FILES['foto_mesjid']['name'];
        if ($foto) {
            $config['upload_path'] = './assets/photo';
            $config['max_size'] = 512;
            $config['allowed_types'] = 'jpg|jpeg|png|tiff|bmp';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_mesjid')) {
                // echo "Photo Gagal diUpload!";
                $photo = 'default.png';
            } else {
                $photo = $this->upload->data('file_name');
            }
        } else {
            $photo = 'default.png';
        }

        $data = [
            "nama_mesjid" => $this->input->post('nama_mesjid', true),
            "alamat_mesjid" => $this->input->post('alamat_mesjid', true),
            "lokasi_mesjid" => $this->input->post('lokasi_mesjid', true),
            "foto_mesjid" => $photo
        ];
        $this->db->insert('mesjid', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id_mesjid', $id);
        $this->db->delete('mesjid');
    }

    public function getIdmesjid($id_mesjid)
    {
        return $this->db->get_where('mesjid', ['id_mesjid' => $id_mesjid])->row();
    }

    public function updateData()
    {
        $foto = $_FILES['foto_mesjid']['name'];
        if ($foto) {
            $config['upload_path'] = './assets/photo';
            $config['max_size'] = 512;
            $config['allowed_types'] = 'jpg|jpeg|png|tiff|bmp';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_mesjid')) {
                echo $this->upload->display_errors();
            } else {
                $cekFotoLama = $this->db->get_where('mesjid', ['id_mesjid' => $this->input->post('id_mesjid')])->row();
                if ($cekFotoLama->foto_mesjid != 'default.jpg') {
                    unlink('assets/photo/' . $cekFotoLama->foto_mesjid);
                }
                $fotoBaru = $this->upload->data('file_name');
                $data['foto_mesjid'] = $fotoBaru;
            }
        } else {
            $cekFotoLama = $this->db->get_where('mesjid', ['id_mesjid' => $this->input->post('id_mesjid')])->row();
            $fotoBaru = $cekFotoLama->foto_mesjid;
        }

        $data = [
            "nama_mesjid" => $this->input->post('nama_mesjid', true),
            "alamat_mesjid" => $this->input->post('alamat_mesjid', true),
            "lokasi_mesjid" => $this->input->post('lokasi_mesjid', true),
            "foto_mesjid" => $fotoBaru,
            "aktif" => $this->input->post('aktif', true)
        ];
        $this->db->where('id_mesjid', $this->input->post('id_mesjid'));
        $this->db->update('mesjid', $data);
    }
}
