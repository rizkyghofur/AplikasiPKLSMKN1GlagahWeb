<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class jurnalpkl_model extends CI_Model
{
    private $_table = "jurnal_pkl";

    public $id_jurnal_pkl;
    public $id_siswa;
    public $id_kompetensi_dasar;
    public $tanggal;
    public $topik_pekerjaan;
    public $status;

    public function rules()
    {
        return [
            [
                'field' => 'id_kompetensi_dasar',
                'label' => 'Kompetensi Dasar',
                'rules' => 'required'
            ],
            [
                'field' => 'topik_pekerjaan',
                'label' => 'Topik Pekerjaan',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = jurnal_pkl.id_siswa');
        $this->db->join('kompetensi_dasar', 'kompetensi_dasar.id = jurnal_pkl.id_kompetensi_dasar');
        $this->db->where('jurnal_pkl.id_siswa', $this->session->userdata('id'));
        $this->db->order_by('id_jurnal_pkl', 'desc');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_jurnal_pkl)
    {
        return $this->db->get_where($this->_table, ["id_jurnal_pkl" => $id_jurnal_pkl])->row();
    }

    public function getMapel()
    {
        $this->db->select('*');
        $this->db->from('mapel');
        $query = $this->db->get();
        return $query->result();
    }

    public function getKompetensidasar($id)
    {
        $kompetensi_dasar = $this->db->query("SELECT * FROM kompetensi_dasar WHERE id_mapel = '$id'");
        return $kompetensi_dasar->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->id_kompetensi_dasar = $post["id_kompetensi_dasar"];
        $this->tanggal = $post["tanggal"];
        $this->topik_pekerjaan = $post["topik_pekerjaan"];
        $this->status = $post['status'];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jurnal_pkl = $post["id_jurnal_pkl"];
        $this->id_siswa = $post["id_siswa"];
        $this->id_kompetensi_dasar = $post["id_kompetensi_dasar"];
        $this->tanggal = $post["tanggal"];
        $this->topik_pekerjaan = $post["topik_pekerjaan"];
        $this->status = $post['status'];
        return $this->db->update($this->_table, $this, array("id_jurnal_pkl" => $post["id_jurnal_pkl"]));
    }

    public function delete($id_jurnal_pkl)
    {
        return $this->db->delete($this->_table, array("id_jurnal_pkl" => $id_jurnal_pkl));
    }
}
