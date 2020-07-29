<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class jurnalpkl_model extends CI_Model
{
    private $_table = "jurnal_pkl";

    public function getAll()
    {
        $this->db->select('*');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = jurnal_pkl.id_siswa');
        $this->db->join('kompetensi_dasar', 'kompetensi_dasar.id = jurnal_pkl.id_kompetensi_dasar');
        $this->db->where('jurnal_pkl.id_siswa', $this->session->userdata('id'));
        $this->db->order_by('id_jurnal_pkl', 'desc');
        return $this->db->get($this->_table)->result();
    }

}
