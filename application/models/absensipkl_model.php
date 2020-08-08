<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class absensipkl_model extends CI_Model
{

    private $_table = 'absensi';

    public function rules()
    {
        return [
            [
                'field' => 'tanggal_absensi',
                'label' => 'Tanggal Absensi',
                'rules' => 'required'
            ],
            [
                'field' => 'keterangan',
                'label' => 'Keterangan',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = absensi.id_siswa');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = absensi.id_siswa');
        $this->db->where('pengajuanpkl.id_dudi', $this->session->userdata('id_dudi'));
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllByMonth($sort)
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = absensi.id_siswa');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = absensi.id_siswa');
        $this->db->where('pengajuanpkl.id_dudi', $this->session->userdata('id'));
        $this->db->where('MONTH(absensi.tanggal_absensi)', $sort);
        $query = $this->db->get();
        return $query->result();
    }

    public function getKetidakhadiran()
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = absensi.id_siswa');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = absensi.id_siswa');
        $this->db->where('pengajuanpkl.id_dudi', $this->session->userdata('id'));
        $this->db->where_not_in('absensi.keterangan', 'Hadir');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDataSiswa()
    {
        $this->db->select('*');
        $this->db->from('pengajuanpkl');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = pengajuanpkl.id_siswa');
        $this->db->where('pengajuanpkl.status_validasi', 'Diterima');
        $this->db->where('pengajuanpkl.id_dudi', $this->session->userdata('id_dudi'));
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_siswa = $post['id_siswa'];
        $this->tanggal_absensi = $post['tanggal_absensi'];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id_absensi)
    {
        return $this->db->delete($this->_table, array("id_absensi" => $id_absensi));
    }
}
