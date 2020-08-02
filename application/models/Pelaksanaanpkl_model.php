<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class pelaksanaanpkl_model extends CI_Model
{

    private $_table = "pengajuanpkl";

    public $id_pengajuanpkl;
    public $tanggal_masuk;
    public $tanggal_keluar;
    public $id_guru;
    public $status_validasi;

    public function getAll()
    {
        $this->db->select('*');
        $this->db->join('data_guru', 'data_guru.id_guru = pengajuanpkl.id_guru', 'left');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = pengajuanpkl.id_siswa');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengajuanpkl.id_dudi');
        $this->db->order_by('id_pengajuanpkl', 'desc');
        $this->db->group_by('data_dudi.nama_dudi');
        return $this->db->get($this->_table)->result();
    }
}
