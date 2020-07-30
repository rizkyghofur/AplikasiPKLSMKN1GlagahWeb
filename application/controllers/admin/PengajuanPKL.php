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
}
