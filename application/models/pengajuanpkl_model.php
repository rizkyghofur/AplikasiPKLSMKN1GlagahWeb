<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class pengajuanpkl_model extends CI_Model
{

    private $_table = "pengajuanpkl";

    public $id_pengajuanpkl;
    public $tanggal_masuk;
    public $tanggal_keluar;
    public $id_guru;
    public $status_validasi;

    public function rules()
    {
        return [
            [
                'field' => 'id_guru',
                'label' => 'Nama Guru',
                'rules' => 'required'
            ],

            [
                'field' => 'status_validasi',
                'label' => 'Status Validasi',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal_masuk',
                'label' => 'Tanggal Masuk',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal_keluar',
                'label' => 'Tanggal Keluar',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->join('data_guru', 'data_guru.id_guru = pengajuanpkl.id_guru', 'left');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = pengajuanpkl.id_siswa');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengajuanpkl.id_dudi');
        $this->db->order_by('id_pengajuanpkl', 'desc');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_pengajuanpkl)
    {
        $this->db->select('*');
        $this->db->join('data_guru', 'data_guru.id_guru = pengajuanpkl.id_guru', 'left');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = pengajuanpkl.id_siswa');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengajuanpkl.id_dudi');
        return $this->db->get_where($this->_table, ["id_pengajuanpkl" => $id_pengajuanpkl])->row();
    }

    function get_data_guru()
    {
        $this->db->select('*');
        $this->db->from('data_guru');
        $query = $this->db->get();
        return $query->result();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pengajuanpkl = $post["id_pengajuanpkl"];
        $this->id_guru = $post["id_guru"];
        $this->tanggal_masuk = $post["tanggal_masuk"];
        $this->tanggal_keluar = $post["tanggal_keluar"];
        $this->status_validasi = $post["status_validasi"];
        return $this->db->update($this->_table, $this, array("id_pengajuanpkl" => $post["id_pengajuanpkl"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pengajuanpkl" => $id));
    }
}
