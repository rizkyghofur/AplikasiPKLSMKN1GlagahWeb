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

    public function tambahpenilaianpkl()
    {
        $data['title'] = 'Tambah Data Penilaian PKL';
        $this->load->view("admin/penilaianpkl/tambahpenilaianpkl", $data);
    }

    public function editpenilaianpkl()
    {
    }

    public function lihatpenilaianpkl()
    {
    }
}
