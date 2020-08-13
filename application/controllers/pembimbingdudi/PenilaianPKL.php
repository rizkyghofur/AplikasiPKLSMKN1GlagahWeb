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
        if ($this->admin->is_role() != "pembimbing_dudi") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Penilaian PKL';
        $data['data_siswa'] = $this->penilaianpkl_model->getAllForDUDI();
        $this->load->view("pembimbingdudi/penilaianpkl/listpenilaianpkl", $data);
    }

    public function tambahpenilaianpkl($nama_siswa = null)
    {
        if (!isset($nama_siswa)) redirect('pembimbingdudi/PenilaianPKL');
        $data['siswa'] = $this->penilaianpkl_model->getById($nama_siswa);
        $data['title'] = 'Tambah Data Penilaian PKL';
        $this->load->view("pembimbingdudi/penilaianpkl/tambahpenilaianpkl", $data);
    }

    public function tambahnilaipkl()
    {
        $datanilai = $this->penilaianpkl_model;
        $datanilai->save();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('pembimbingdudi/PenilaianPKL');
    }

    public function editpenilaianpkl($nama_siswa = null)
    {
        if (!isset($nama_siswa)) redirect('pembimbingdudi/PenilaianPKL');
        $data['title'] = 'Ubah Data Penilaian PKL';
        $data['data_siswa'] = $this->penilaianpkl_model->getById($nama_siswa);
        $data['siswa'] = $this->penilaianpkl_model->getNilaiSiswa($nama_siswa);
        $this->load->view("pembimbingdudi/penilaianpkl/editpenilaianpkl", $data);
    }

    public function editnilaipkl()
    {
        $datanilai = $this->penilaianpkl_model;
        $datanilai->update();
        $this->session->set_flashdata('success', 'Berhasil diubah');
        redirect('pembimbingdudi/PenilaianPKL');
    }

    public function lihatpenilaianpkl($nama_siswa)
    {
        $data['data_siswa'] = $this->penilaianpkl_model->getById($nama_siswa);
        $data['siswa'] = $this->penilaianpkl_model->getNilaiSiswa($nama_siswa);
        $this->load->library('pdf');
        $this->load->view('pembimbingdudi/penilaianpkl/lihatpenilaianpkl', $data);
    }
}
