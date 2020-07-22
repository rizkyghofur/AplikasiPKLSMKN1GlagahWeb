<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ValidasiJurnalPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("validasijurnalpkl_model");
    }

    public function index()
    {
        $data["jurnal_pkl"] = $this->validasijurnalpkl_model->getAll();
        $this->load->view("pembimbingdudi/jurnalpkl/validasijurnalpkl", $data);
    }

    public function editvalidasijurnalpkl($id_jurnal_pkl = null)
    {
        if (!isset($id_jurnal_pkl)) redirect('pembimbingdudi/validasijurnalpkl');
        $validasijurnalpkl = $this->validasijurnalpkl_model;
        $validation = $this->form_validation;
        $validation->set_rules($validasijurnalpkl->rules());

        if ($validation->run()) {
            $validasijurnalpkl->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jurnal_pkl"] = $validasijurnalpkl->getById($id_jurnal_pkl);
        if (!$data["jurnal_pkl"]) show_404();
        $this->load->view("pembimbingdudi/jurnalpkl/editvalidasijurnalpkl", $data);
    }
}
