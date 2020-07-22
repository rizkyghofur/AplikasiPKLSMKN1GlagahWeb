<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class dataguru_model extends CI_Model
{
    private $_table = "data_guru";

    public $id_guru;
    public $nip;
    public $nama_guru;
    public $jenis_kelamin;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'nama_guru',
                'label' => 'Nama guru',
                'rules' => 'required'
            ],

            [
                'field' => 'nip',
                'label' => 'NIP',
                'rules' => 'required'
            ],

            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ]

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_guru)
    {
        return $this->db->get_where($this->_table, ["id_guru" => $id_guru])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_guru = $post["nama_guru"];
        $this->nip = $post["nip"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_guru = $post["id_guru"];
        $this->nip = $post["nip"];
        $this->nama_guru = $post["nama_guru"];
        $this->alamat = $post["alamat"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        return $this->db->update($this->_table, $this, array("id_guru" => $post["id_guru"]));
    }

    public function delete($id_guru)
    {
        return $this->db->delete($this->_table, array("id_guru" => $id_guru));
    }
}
