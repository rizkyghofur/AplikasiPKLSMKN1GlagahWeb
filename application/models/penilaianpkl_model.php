<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class penilaianpkl_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('jurnal_pkl');
        $this->db->join('data_siswa', 'data_siswa.nis=jurnal_pkl.nis');
        $query = $this->db->get();
        return $query->result();
    }

    function getDataSiswa($str)
    {
        $this->db->like('nama', $str, 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('data_siswa')->result();
    }
}
