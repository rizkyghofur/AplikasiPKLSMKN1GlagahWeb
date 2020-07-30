<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AbsensiPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin");
        $this->load->model("absensipkl_model");
        if ($this->admin->is_role() != "pembimbing_dudi") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Absensi PKL Siswa';
        $data["absensi"] = $this->absensipkl_model->getAll();
        $this->load->view("pembimbingdudi/absensipkl/absensipkl", $data);
    }
}
