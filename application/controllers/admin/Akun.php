<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("akun_model");
        $this->load->library('form_validation');
        $this->load->model('admin');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Akun Pengguna';
        $data['pengguna'] = $this->akun_model->getAll();
        $this->load->view("admin/akun/listakun", $data);
    }

    public function editakun($id = null)
    {
        $data['title'] = 'Ubah Akun Pengguna';
        if (!isset($id)) redirect('admin/akun');
        $akun = $this->akun_model;
        $validation = $this->form_validation;
        $validation->set_rules($akun->rules());

        if ($validation->run()) {
            $akun->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/akun');
        }

        $data["akun"] = $akun->getById($id);
        if (!$data["akun"]) show_404();
        $this->load->view("admin/akun/editakun", $data);
    }

    public function hapusakun($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->akun_model->delete($id)) {
            redirect(base_url('admin/akun'));
        }
    }
}
