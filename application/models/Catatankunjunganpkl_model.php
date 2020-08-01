<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class catatankunjunganpkl_model extends CI_Model
{

    private $_table = "catatan_kunjungan_pkl";

    public function getAll()
    {
        $this->db->join('data_guru', 'data_guru.id_guru = catatan_kunjungan_pkl.id_guru');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_guru = data_guru.id_guru');
        $this->db->order_by('id_catatan_kunjungan_pkl', 'DESC');
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function getGuruPembimbing()
    {
        $this->db->select('nama_guru');
        $this->db->join('data_guru', 'data_guru.id_guru = catatan_kunjungan_pkl.id_guru');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_guru = data_guru.id_guru');
        return $this->db->get_where($this->_table, ["pengajuanpkl.id_siswa" => $this->session->userdata('id')])->row();
    }
}
