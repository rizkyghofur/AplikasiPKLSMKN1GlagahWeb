<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class datasiswa_model extends CI_Model
{
    private $_table = "data_siswa";

    public $id_siswa;
    public $nis;
    public $nisn;
    public $nama_siswa;
    public $kelas;
    public $jenis_kelamin;
    public $tempat_lahir;
    public $tgl_lahir;
    public $agama;
    public $alamat_rumah;
    public $hp_siswa;
    public $ayah;
    public $ibu;
    public $alamat_orang_tua;
    public $no_hp_orang_tua;

    public function rules()
    {
        return [
            [
                'field' => 'nama_siswa',
                'label' => 'Nama Siswa',
                'rules' => 'required'
            ],

            [
                'field' => 'nis',
                'label' => 'NIS',
                'rules' => 'required'
            ],

            [
                'field' => 'kelas',
                'label' => 'Kelas',
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

    public function getById($id_siswa)
    {
        return $this->db->get_where($this->_table, ["id_siswa" => $id_siswa])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nis = $post["nis"];
        $this->nisn = $post["nisn"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->kelas = $post["kelas"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->agama = $post["agama"];
        $this->alamat_rumah = $post["alamat_rumah"];
        $this->hp_siswa = $post["hp_siswa"];
        $this->ayah = $post["ayah"];
        $this->ibu = $post["ibu"];
        $this->alamat_orang_tua = $post["alamat_orang_tua"];
        $this->no_hp_orang_tua = $post["no_hp_orang_tua"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->nis = $post["nis"];
        $this->nisn = $post["nisn"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->kelas = $post["kelas"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->agama = $post["agama"];
        $this->alamat_rumah = $post["alamat_rumah"];
        $this->hp_siswa = $post["hp_siswa"];
        $this->ayah = $post["ayah"];
        $this->ibu = $post["ibu"];
        $this->alamat_orang_tua = $post["alamat_orang_tua"];
        $this->no_hp_orang_tua = $post["no_hp_orang_tua"];
        return $this->db->update($this->_table, $this, array("id_siswa" => $post["id_siswa"]));
    }

    public function delete($id_siswa)
    {
        return $this->db->delete($this->_table, array("id_siswa" => $id_siswa));
    }
}
