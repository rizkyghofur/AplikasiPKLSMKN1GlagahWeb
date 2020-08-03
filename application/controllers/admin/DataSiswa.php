<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DataSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("datasiswa_model");
        $this->load->model('pengajuanpkl_model');
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
        $data['notif_belumtervalidasi'] = $this->pengajuanpkl_model->getNotifBelumTervalidasi();
        $data['belum_tervalidasi'] = $this->pengajuanpkl_model->getBelumTervalidasi();
        $this->load->view("admin/datasiswa/listsiswa", $data);
    }
}
