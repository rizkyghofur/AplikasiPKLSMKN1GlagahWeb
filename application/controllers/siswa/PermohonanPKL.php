<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PermohonanPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permohonanpkl_model');
        $this->load->model('admin');
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Permohonan Pelaksanaan PKL';
        $data['permohonanpkl'] = $this->permohonanpkl_model->getAll();
        $data['pengajuanpkl'] = $this->permohonanpkl_model->getHistory();
        $this->load->view("siswa/permohonanpkl/permohonanpkl", $data);
    }
}
