<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class absensipkl_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = absensi.id_siswa');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = absensi.id_siswa');
        $this->db->where('pengajuanpkl.id_dudi', $this->session->userdata('id'));
        $this->db->where('absensi.keterangan !=', "Hadir");
        $query = $this->db->get();
        return $query->result();
    }
}
