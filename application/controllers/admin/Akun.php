<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("akun_model");
        $this->load->model('admin');
        $this->load->model('pengajuanpkl_model');
        $this->load->library('form_validation');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Akun Pengguna';
        $data['pengguna'] = $this->akun_model->getAll();
        $data['notif_belumtervalidasi'] = $this->pengajuanpkl_model->getNotifBelumTervalidasi();
        $data['belum_tervalidasi'] = $this->pengajuanpkl_model->getBelumTervalidasi();
        $this->load->view("admin/akun/listakun", $data);
    }
}
