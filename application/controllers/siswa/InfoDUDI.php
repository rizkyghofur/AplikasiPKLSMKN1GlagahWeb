<?php

defined('BASEPATH') or exit('No direct script access allowed');

class InfoDUDI extends CI_Controller
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
        $data['title'] = 'Info DUDI';
        $data['data_dudi'] = $this->datadudi_model->getAll();
        $this->load->view("siswa/dudi/infodudi", $data);
    }
}
