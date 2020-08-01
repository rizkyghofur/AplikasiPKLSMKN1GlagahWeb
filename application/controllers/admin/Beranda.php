<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin');
        $this->load->model('datadudi_model');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['belum_mengajukan'] = $this->datadudi_model->getAll();
        $this->load->view("admin/beranda", $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
