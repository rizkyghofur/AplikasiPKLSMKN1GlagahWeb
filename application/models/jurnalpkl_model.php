<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class jurnalpkl_model extends CI_Model
{
    private $_table = "jurnal_pkl";

    public $id_jurnal_pkl;
    public $id_siswa;
    public $kompetensi_dasar;
    public $tanggal;
    public $topik_pekerjaan;
    public $id_dudi;

    public function rules()
    {
        return [
            [
                'field' => 'topik_pekerjaan',
                'label' => 'Topik Pekerjaan',
                'rules' => 'required'
            ],

            [
                'field' => 'id_dudi',
                'label' => 'Tempat PKL',
                'rules' => 'required'
            ]

        ];
    }

    public function getAll($limit, $start)
    {
        $this->db->select('*');
        $this->db->join('data_siswa', 'data_siswa.id = jurnal_pkl.id_siswa');
        $this->db->where('jurnal_pkl.id_siswa', $this->session->userdata('id'));
        $this->db->order_by('id_jurnal_pkl', 'desc');
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function getById($id_jurnal_pkl)
    {
        return $this->db->get_where($this->_table, ["id_jurnal_pkl" => $id_jurnal_pkl])->row();
    }

    function get_data_dudi()
    {
        $this->db->select('*');
        $this->db->from('pengajuanpkl');
        $this->db->join('data_siswa', 'data_siswa.id = pengajuanpkl.id_siswa');
        $this->db->join('data_dudi', 'data_dudi.id = pengajuanpkl.id_dudi');
        $this->db->where('pengajuanpkl.id_siswa', $this->session->userdata('id'));
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->id_dudi = $post["id_dudi"];
        $this->kompetensi_dasar = $post["kompetensi_dasar"];
        $this->tanggal = $post["tanggal"];
        $this->topik_pekerjaan = $post["topik_pekerjaan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jurnal_pkl = $post["id_jurnal_pkl"];
        $this->id_siswa = $post["id_siswa"];
        $this->id_dudi = $post["id_dudi"];
        $this->kompetensi_dasar = $post["kompetensi_dasar"];
        $this->tanggal = $post["tanggal"];
        $this->topik_pekerjaan = $post["topik_pekerjaan"];
        return $this->db->update($this->_table, $this, array("id_jurnal_pkl" => $post["id_jurnal_pkl"]));
    }

    public function delete($id_jurnal_pkl)
    {
        return $this->db->delete($this->_table, array("id_jurnal_pkl" => $id_jurnal_pkl));
    }
}
