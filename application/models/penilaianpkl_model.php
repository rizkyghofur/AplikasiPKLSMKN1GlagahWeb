<?php defined('BASEPATH') or exit('No direct Scrip access allowed');

class penilaianpkl_model extends CI_Model
{

    private $_table = 'data_siswa';
    private $_table_nilai = 'penilaian_pkl';

    public function getAll()
    {
        $this->db->select('data_siswa.id_siswa, data_siswa.kelas, data_siswa.nama_siswa, jurusan.nama_jurusan, data_dudi.nama_dudi, penilaian_pkl.id_penilaian_pkl');
        $this->db->from('data_siswa');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = data_siswa.id_siswa', 'left');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengajuanpkl.id_dudi', 'left');
        $this->db->join('penilaian_pkl', 'penilaian_pkl.id_siswa = data_siswa.id_siswa', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan = data_siswa.id_jurusan');
        $this->db->where('pengajuanpkl.status_validasi', 'Diterima');
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($nama_siswa)
    {
        $this->db->join('jurusan', 'jurusan.id_jurusan = data_siswa.id_jurusan');
        $this->db->join('pengajuanpkl', 'pengajuanpkl.id_siswa = data_siswa.id_siswa');
        $this->db->join('data_dudi', 'data_dudi.id_dudi = pengajuanpkl.id_dudi');
        return $this->db->get_where($this->_table, ["data_siswa.id_siswa" => $nama_siswa])->row();
    }

    public function getNilaiSiswa($nama_siswa)
    {
        return $this->db->get_where($this->_table_nilai, ["id_siswa" => $nama_siswa])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->aspek_teknis_1 = $post["aspek_teknis_1"];
        $this->nilai_astek_1 = $post["nilai_astek_1"];
        $this->aspek_teknis_2 = $post["aspek_teknis_2"];
        $this->nilai_astek_2 = $post["nilai_astek_2"];
        $this->aspek_teknis_3 = $post["aspek_teknis_3"];
        $this->nilai_astek_3 = $post["nilai_astek_3"];
        $this->aspek_teknis_4 = $post["aspek_teknis_4"];
        $this->nilai_astek_4 = $post["nilai_astek_4"];
        $this->aspek_teknis_5 = $post["aspek_teknis_5"];
        $this->nilai_astek_5 = $post["nilai_astek_5"];
        $this->aspek_teknis_6 = $post["aspek_teknis_6"];
        $this->nilai_astek_6 = $post["nilai_astek_6"];
        $this->aspek_teknis_7 = $post["aspek_teknis_7"];
        $this->nilai_astek_7 = $post["nilai_astek_7"];
        $this->aspek_teknis_8 = $post["aspek_teknis_8"];
        $this->nilai_astek_8 = $post["nilai_astek_8"];
        $this->aspek_teknis_9 = $post["aspek_teknis_9"];
        $this->nilai_astek_9 = $post["nilai_astek_9"];
        $this->aspek_teknis_10 = $post["aspek_teknis_10"];
        $this->nilai_astek_10 = $post["nilai_astek_10"];
        $this->aspek_teknis_11 = $post["aspek_teknis_11"];
        $this->nilai_astek_11 = $post["nilai_astek_11"];
        $this->aspek_teknis_12 = $post["aspek_teknis_12"];
        $this->nilai_astek_12 = $post["nilai_astek_12"];
        $this->aspek_teknis_13 = $post["aspek_teknis_13"];
        $this->nilai_astek_13 = $post["nilai_astek_13"];
        $this->aspek_teknis_14 = $post["aspek_teknis_14"];
        $this->nilai_astek_14 = $post["nilai_astek_14"];
        $this->nilai_nontek_disiplin = $post["nilai_nontek_disiplin"];
        $this->nilai_nontek_kerjasama = $post["nilai_nontek_kerjasama"];
        $this->nilai_nontek_inisiatif = $post["nilai_nontek_inisiatif"];
        $this->nilai_nontek_tanggungjawab = $post["nilai_nontek_tanggungjawab"];
        $this->nilai_nontek_kebersihan_kerapian = $post["nilai_nontek_kebersihan_kerapian"];
        return $this->db->insert($this->_table_nilai, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->aspek_teknis_1 = $post["aspek_teknis_1"];
        $this->nilai_astek_1 = $post["nilai_astek_1"];
        $this->aspek_teknis_2 = $post["aspek_teknis_2"];
        $this->nilai_astek_2 = $post["nilai_astek_2"];
        $this->aspek_teknis_3 = $post["aspek_teknis_3"];
        $this->nilai_astek_3 = $post["nilai_astek_3"];
        $this->aspek_teknis_4 = $post["aspek_teknis_4"];
        $this->nilai_astek_4 = $post["nilai_astek_4"];
        $this->aspek_teknis_5 = $post["aspek_teknis_5"];
        $this->nilai_astek_5 = $post["nilai_astek_5"];
        $this->aspek_teknis_6 = $post["aspek_teknis_6"];
        $this->nilai_astek_6 = $post["nilai_astek_6"];
        $this->aspek_teknis_7 = $post["aspek_teknis_7"];
        $this->nilai_astek_7 = $post["nilai_astek_7"];
        $this->aspek_teknis_8 = $post["aspek_teknis_8"];
        $this->nilai_astek_8 = $post["nilai_astek_8"];
        $this->aspek_teknis_9 = $post["aspek_teknis_9"];
        $this->nilai_astek_9 = $post["nilai_astek_9"];
        $this->aspek_teknis_10 = $post["aspek_teknis_10"];
        $this->nilai_astek_10 = $post["nilai_astek_10"];
        $this->aspek_teknis_11 = $post["aspek_teknis_11"];
        $this->nilai_astek_11 = $post["nilai_astek_11"];
        $this->aspek_teknis_12 = $post["aspek_teknis_12"];
        $this->nilai_astek_12 = $post["nilai_astek_12"];
        $this->aspek_teknis_13 = $post["aspek_teknis_13"];
        $this->nilai_astek_13 = $post["nilai_astek_13"];
        $this->aspek_teknis_14 = $post["aspek_teknis_14"];
        $this->nilai_astek_14 = $post["nilai_astek_14"];
        $this->nilai_nontek_disiplin = $post["nilai_nontek_disiplin"];
        $this->nilai_nontek_kerjasama = $post["nilai_nontek_kerjasama"];
        $this->nilai_nontek_inisiatif = $post["nilai_nontek_inisiatif"];
        $this->nilai_nontek_tanggungjawab = $post["nilai_nontek_tanggungjawab"];
        $this->nilai_nontek_kebersihan_kerapian = $post["nilai_nontek_kebersihan_kerapian"];
        return $this->db->update($this->_table_nilai, $this, array("id_siswa" => $post["id_siswa"]));
    }
}
