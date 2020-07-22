<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class validasijurnalpkl_model extends CI_Model
{

    private $_table = "jurnal_pkl";

    public $id_jurnal_pkl;
    public $catatan;
    public $status_validasi;

    public function rules()
    {
        return [
            [
                'field' => 'status_validasi',
                'label' => 'Status Validasi',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('jurnal_pkl');
        $this->db->join('data_siswa', 'jurnal_pkl.id_siswa = data_siswa.id');
        $this->db->join('data_dudi', 'jurnal_pkl.id_dudi = data_dudi.id');
        $this->db->where('jurnal_pkl.id_dudi', $this->session->userdata('id'));
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_jurnal_pkl)
    {
        return $this->db->get_where($this->_table, ["id_jurnal_pkl" => $id_jurnal_pkl])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jurnal_pkl = $post["id_jurnal_pkl"];
        $this->catatan = $post["catatan"];
        $this->status_validasi = $post["status_validasi"];
        return $this->db->update($this->_table, $this, array("id_jurnal_pkl" => $post["id_jurnal_pkl"]));
    }
}
