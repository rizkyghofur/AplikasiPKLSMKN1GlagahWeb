<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin');
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $this->load->view("siswa/beranda", $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
