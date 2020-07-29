<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LaporanProgramPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin");
        $this->load->model("programpkl_model");
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['program_pkl'] = $this->programpkl_model->getAll();
        $this->load->view("siswa/laporanpkl/laporanprogrampkl", $data);
    }

    public function cetak_program_pkl($id_siswa = null)
    {
        $this->load->library('fpdf');
        if (!isset($id_siswa)) redirect('siswa/LaporanProgramPKL');
        $cetakprogrampkl = $this->programpkl_model;
        $data["data_program_pkl"] = $cetakprogrampkl->getAll();
        $data["program_pkl"] = $cetakprogrampkl->getById($id_siswa);
        $this->load->view('siswa/laporanpkl/cetakprogrampkl', $data);
    }
}
