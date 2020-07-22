<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DataDUDI extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("datadudi_model");
        $this->load->library('form_validation');
        $this->load->model('admin');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['data_dudi'] = $this->datadudi_model->getAll();
        $this->load->view("admin/datadudi/listdudi", $data);
    }

    public function daftardudi()
    {
        $datadudi = $this->datadudi_model;
        $validation = $this->form_validation;
        $validation->set_rules($datadudi->rules());

        if ($validation->run()) {
            $datadudi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/datadudi/daftardudi");
    }

    public function editdatadudi($id = null)
    {
        if (!isset($id)) redirect('admin/datadudi');
        $datadudi = $this->datadudi_model;
        $validation = $this->form_validation;
        $validation->set_rules($datadudi->rules());

        if ($validation->run()) {
            $datadudi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datadudi"] = $datadudi->getById($id);
        if (!$data["datadudi"]) show_404();
        $this->load->view("admin/datadudi/editdatadudi", $data);
    }

    public function hapusdatadudi($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->datadudi_model->delete($id)) {
            redirect(base_url('admin/datadudi'));
        }
    }
}
