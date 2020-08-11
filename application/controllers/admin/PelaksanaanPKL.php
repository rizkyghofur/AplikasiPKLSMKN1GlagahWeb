<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PelaksanaanPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pelaksanaanpkl_model");
        $this->load->library('form_validation');
        $this->load->model('admin');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Pelaksanaan PKL';
        $data['pelaksanaanpkl'] = $this->pelaksanaanpkl_model->getAll();
        $this->load->view("admin/pelaksanaanpkl/listpelaksanaanpkl", $data);
    }

    public function editpelaksanaanpkl($id = null)
    {

        if (!isset($id)) redirect('admin/PelaksanaanPKL');
        $pelaksanaanpkl = $this->pelaksanaanpkl_model;
        $validation = $this->form_validation;
        $validation->set_rules($pelaksanaanpkl->rules());

        if ($validation->run()) {
            $pelaksanaanpkl->update();
            $this->session->set_flashdata('success', 'Berhasil diubah');
            redirect('admin/PelaksanaanPKL');
        }
        $data['title'] = 'Kelompok Pelaksanaan PKL';
        $data["pelaksanaanpkl"] = $pelaksanaanpkl->getById($id);
        if (!$data["pelaksanaanpkl"]) show_404();
        $this->load->view("admin/pelaksanaanpkl/editpelaksanaanpkl", $data);
    }
}
