<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DataSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("datasiswa_model");
        $this->load->library('form_validation');
        $this->load->model('admin');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Data Siswa';
        $data['data_siswa'] = $this->datasiswa_model->getAll();
        $this->load->view("admin/datasiswa/listsiswa", $data);
    }
}
