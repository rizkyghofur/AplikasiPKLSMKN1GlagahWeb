<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PengajuanPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengajuanpkl_model");
        $this->load->library('form_validation');
        $this->load->model('admin');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Pengajuan PKL';
        $data['pengajuanpkl'] = $this->pengajuanpkl_model->getAll();
        $data['data_guru'] = $this->pengajuanpkl_model->get_data_guru();
        $this->load->view("admin/pengajuanpkl/listpengajuan", $data);
    }

    public function editpengajuanpkl($id = null)
    {
        $data['title'] = 'Ubah Pengajuan PKL';
        if (!isset($id)) redirect('admin/pengajuanpkl');
        $pengajuanpkl = $this->pengajuanpkl_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengajuanpkl->rules());

        if ($validation->run()) {
            $pengajuanpkl->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/PengajuanPKL');
        }

        $data['data_guru'] = $this->pengajuanpkl_model->get_data_guru();
        $data["pengajuanpkl"] = $pengajuanpkl->getById($id);
        if (!$data["pengajuanpkl"]) show_404();
        $this->load->view("admin/pengajuanpkl/editpengajuanpkl", $data);
    }

    public function hapuspengajuanpkl($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->pengajuanpkl_model->delete($id)) {
            redirect(base_url('admin/pengajuanpkl'));
        }
    }
}
