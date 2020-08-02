<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AbsensiPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("absensipkl_model");
        $this->load->model("permohonanpkl_model");
        $this->load->model('admin');
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Absensi PKL';
        $data['absensi'] = $this->absensipkl_model->getAll();
        $data['pengajuanpkl'] = $this->permohonanpkl_model->getAll();
        $this->load->view("siswa/absensipkl/listabsensipkl", $data);
    }
}
