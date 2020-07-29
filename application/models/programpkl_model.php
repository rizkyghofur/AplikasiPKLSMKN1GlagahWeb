<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class programpkl_model extends CI_Model
{
    private $_table = "program_pkl";

    public function getAll()
    {
        $this->db->select('*');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = program_pkl.id_siswa');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengajuanpkl.id_dudi');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = program_pkl.id_siswa');
        $this->db->join('jurusan', 'jurusan.id_jurusan = data_siswa.id_jurusan');
        $this->db->join('kompetensi_dasar', 'kompetensi_dasar.id = program_pkl.id_kompetensi_dasar');
        $this->db->where('program_pkl.id_siswa', $this->session->userdata('id'));
        $this->db->order_by('id_program_pkl', 'desc');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_siswa)
    {
        $this->db->join('data_siswa', 'data_siswa.id_siswa = program_pkl.id_siswa');
        $this->db->join('jurusan', 'jurusan.id_jurusan = data_siswa.id_jurusan');
        $this->db->join('kompetensi_dasar', 'kompetensi_dasar.id = program_pkl.id_kompetensi_dasar');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = program_pkl.id_siswa');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengajuanpkl.id_dudi');
        return $this->db->get_where($this->_table, ["program_pkl.id_siswa" => $id_siswa])->row();
    }
}
