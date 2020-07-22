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
        $data['data_siswa'] = $this->datasiswa_model->getAll();
        $this->load->view("admin/datasiswa/listsiswa", $data);
    }

    public function daftarsiswa()
    {
        $datasiswa = $this->datasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($datasiswa->rules());

        if ($validation->run()) {
            $datasiswa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/datasiswa/daftarsiswa");
    }

    public function editdatasiswa($id = null)
    {
        if (!isset($id)) redirect('admin/datasiswa');
        $datasiswa = $this->datasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($datasiswa->rules());

        if ($validation->run()) {
            $datasiswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datasiswa"] = $datasiswa->getById($id);
        if (!$data["datasiswa"]) show_404();
        $this->load->view("admin/datasiswa/editdatasiswa", $data);
    }

    public function hapusdatasiswa($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->datasiswa_model->delete($id)) {
            redirect(base_url('admin/datasiswa'));
        }
    }
}
