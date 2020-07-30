<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class dataguru_model extends CI_Model
{
    private $_table = "data_guru";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
