<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class absensipkl_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->join('data_siswa', 'data_siswa.id=absensi.id_siswa');
        $this->db->where('absensi.id_dudi', $this->session->userdata('id'));
        $query = $this->db->get();
        return $query->result();
    }
}
