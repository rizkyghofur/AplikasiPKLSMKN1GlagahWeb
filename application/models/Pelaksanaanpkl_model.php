<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class pelaksanaanpkl_model extends CI_Model
{
    private $_table = 'pengajuanpkl';

    public $id_pengajuanpkl;
    public $status_keanggotaan;

    public function rules()
    {
        return [
            [
                'field' => 'status_keanggotaan',
                'label' => 'Status Keanggotaan',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $query = $this->db->query('SELECT *, count(pengajuanpkl.id_siswa) as jumlah_siswa FROM `pengajuanpkl` join data_siswa on data_siswa.id_siswa = pengajuanpkl.id_siswa join data_guru on data_guru.id_guru = pengajuanpkl.id_guru join data_dudi on data_dudi.id_dudi = pengajuanpkl.id_dudi where pengajuanpkl.status_validasi = "Diterima" group by pengajuanpkl.id_dudi order by pengajuanpkl.id_dudi');
        return $query->result();
    }

    public function getById($id_dudi)
    {
        $query = $this->db->query('SELECT * FROM `pengajuanpkl` join data_siswa on data_siswa.id_siswa = pengajuanpkl.id_siswa join jurusan on jurusan.id_jurusan = data_siswa.id_jurusan join data_guru on data_guru.id_guru = pengajuanpkl.id_guru join data_dudi on data_dudi.id_dudi = pengajuanpkl.id_dudi where pengajuanpkl.status_validasi = "Diterima" and pengajuanpkl.id_dudi = ' . $id_dudi . ' order by status_keanggotaan desc');
        return $query->result();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pengajuanpkl = $post["id_pengajuanpkl"];
        $this->status_keanggotaan = $post["status_keanggotaan"];
        return $this->db->update($this->_table, $this, array("id_pengajuanpkl" => $post["id_pengajuanpkl"]));
    }
}
