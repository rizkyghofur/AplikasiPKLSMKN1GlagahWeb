<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("akun_model");
        $this->load->model('admin');
        $this->load->library('form_validation');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Akun Pengguna';
        $data['pengguna'] = $this->akun_model->getAll();
        $data['data_dudi'] = $this->akun_model->getAkun();
        $this->load->view("admin/akun/listakun", $data);
    }

    public function tambahakun()
    {
        $tambahakun = $this->akun_model;
        $validation = $this->form_validation;
        $validation->set_rules($tambahakun->rules());

        if ($validation->run()) {
            $tambahakun->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/Akun');
        } else {
            $this->session->set_flashdata('danger', 'Gagal tersimpan, cek kembali masukan yang Anda berikan');
            redirect('admin/Akun');
        }
    }
}
