<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CatatanKunjunganPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("catatankunjunganpkl_model");
        $this->load->model("permohonanpkl_model");
        $this->load->model('admin');
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Catatan Kunjungan PKL';
        $data['catatankunjunganpkl'] = $this->catatankunjunganpkl_model->getAll();
        $data['pengajuanpkl'] = $this->permohonanpkl_model->getAll();
        $data['data_guru'] = $this->catatankunjunganpkl_model->getGuruPembimbing();
        $this->load->view("siswa/catatankunjunganpkl/catatankunjunganpkl", $data);
    }
}
