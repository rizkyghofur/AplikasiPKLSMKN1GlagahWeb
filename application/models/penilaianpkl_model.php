<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class penilaianpkl_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('data_siswa');
        $this->db->join('jurusan', 'jurusan.id_jurusan = data_siswa.id_jurusan');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = data_siswa.id_siswa', 'left');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengajuanpkl.id_dudi', 'left');
        $this->db->join('penilaian_pkl', 'penilaian_pkl.id_siswa = data_siswa.id_siswa', 'left');
        $query = $this->db->get();
        return $query->result();
    }
}
