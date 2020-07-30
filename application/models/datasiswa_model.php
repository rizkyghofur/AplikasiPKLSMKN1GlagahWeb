<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class datasiswa_model extends CI_Model
{
    private $_table = "data_siswa";

    public function getAll()
    {
        $this->db->join('jurusan', 'jurusan.id_jurusan = data_siswa.id_jurusan');
        return $this->db->get($this->_table)->result();
    }
}
