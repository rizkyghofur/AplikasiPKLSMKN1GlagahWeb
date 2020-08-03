<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DataGuru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dataguru_model");
        $this->load->model('pengajuanpkl_model');
        $this->load->library('form_validation');
        $this->load->model('admin');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Data Guru';
        $data['notif_belumtervalidasi'] = $this->pengajuanpkl_model->getNotifBelumTervalidasi();
        $data['belum_tervalidasi'] = $this->pengajuanpkl_model->getBelumTervalidasi();
        $data['data_guru'] = $this->dataguru_model->getAll();
        $this->load->view("admin/dataguru/listguru", $data);
    }
}
