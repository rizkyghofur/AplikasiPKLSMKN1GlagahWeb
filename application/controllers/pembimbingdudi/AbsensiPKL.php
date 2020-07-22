<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AbsensiPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("absensipkl_model");
    }

    public function index()
    {
        $data["absensi"] = $this->absensipkl_model->getAll();
        $this->load->view("pembimbingdudi/absensipkl", $data);
    }
}
