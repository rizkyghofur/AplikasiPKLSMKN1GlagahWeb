<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class akun_model extends CI_Model
{
    private $_table = "pengguna";

    public $id;
    public $username;
    public $password;
    public $role;

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->join('data_guru', 'data_guru.id_guru = pengguna.id', 'left');
        $this->db->join('data_staf_tu', 'data_staf_tu.id_staf_tu = pengguna.id', 'left');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = pengguna.id', 'left');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengguna.id', 'left');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function getById($id)
    {
        $this->db->join('data_guru', 'data_guru.id_guru = pengguna.id', 'left');
        $this->db->join('data_staf_tu', 'data_staf_tu.id_staf_tu = pengguna.id', 'left');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = pengguna.id', 'left');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengguna.id', 'left');
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->role = $post["role"];
        return $this->db->update($this->_table, $this, array("id" => $post["id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
