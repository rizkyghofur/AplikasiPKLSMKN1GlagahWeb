<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PermohonanPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("datadudi_model");
        $this->load->model('admin');
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Permohonan Pelaksanaan PKL';
        $this->load->view("siswa/permohonanpkl/permohonanpkl", $data);
    }
}
