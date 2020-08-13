<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PenilaianPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("penilaianpkl_model");
        $this->load->library('form_validation');
        $this->load->model('admin');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Penilaian PKL';
        $data['data_siswa'] = $this->penilaianpkl_model->getAll();
        $this->load->view("admin/penilaianpkl/listpenilaianpkl", $data);
    }

    public function tambahpenilaianpkl($nama_siswa = null)
    {
        if (!isset($nama_siswa)) redirect('admin/PenilaianPKL');
        $data['siswa'] = $this->penilaianpkl_model->getById($nama_siswa);
        $data['title'] = 'Tambah Data Penilaian PKL';
        $this->load->view("admin/penilaianpkl/tambahpenilaianpkl", $data);
    }

    public function tambahnilaipkl()
    {
        $datanilai = $this->penilaianpkl_model;
        $datanilai->save();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/PenilaianPKL');
    }

    public function editpenilaianpkl($nama_siswa = null)
    {
        if (!isset($nama_siswa)) redirect('admin/PenilaianPKL');
        $data['title'] = 'Ubah Data Penilaian PKL';
        $data['data_siswa'] = $this->penilaianpkl_model->getById($nama_siswa);
        $data['siswa'] = $this->penilaianpkl_model->getNilaiSiswa($nama_siswa);
        $this->load->view("admin/penilaianpkl/editpenilaianpkl", $data);
    }

    public function editnilaipkl()
    {
        $datanilai = $this->penilaianpkl_model;
        $datanilai->update();
        $this->session->set_flashdata('success', 'Berhasil diubah');
        redirect('admin/PenilaianPKL');
    }

    public function lihatpenilaianpkl($nama_siswa)
    {
        $this->load->library('pdf');
        $data['data_siswa'] = $this->penilaianpkl_model->getById($nama_siswa);
        $data['siswa'] = $this->penilaianpkl_model->getNilaiSiswa($nama_siswa);
        if (!$data["siswa"]) show_error('Tidak ditemukan data', '404', 'Tidak dapat mencetak laporan jurnal PKL');
        $this->load->view('siswa/penilaianpkl/lihatpenilaianpkl', $data);
    }
}
