<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Model
{

    function is_logged_in()
    {
        return $this->session->userdata('id', 'role');
    }

    function is_role()
    {
        return $this->session->userdata('role');
    }

    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('data_staf_tu', 'data_staf_tu.id_staf_tu = pengguna.id', 'left');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengguna.id', 'left');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = pengguna.id', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan = data_siswa.id_jurusan', 'left');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = pengguna.id', 'left');
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}
