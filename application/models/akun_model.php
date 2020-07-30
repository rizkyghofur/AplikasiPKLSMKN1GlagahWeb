<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class akun_model extends CI_Model
{
    private $_table = "pengguna";

    public function getAll()
    {
        $this->db->join('data_guru', 'data_guru.id_guru = pengguna.id', 'left');
        $this->db->join('data_staf_tu', 'data_staf_tu.id_staf_tu = pengguna.id', 'left');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = pengguna.id', 'left');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengguna.id', 'left');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get($this->_table);
        return $query->result();
    }
}
