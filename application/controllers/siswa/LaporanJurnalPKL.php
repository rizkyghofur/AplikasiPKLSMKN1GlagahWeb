<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LaporanJurnalPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin');
        $this->load->model("jurnalpkl_model");
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['jurnal_pkl'] = $this->jurnalpkl_model->getAll();
        $this->load->view("siswa/laporanpkl/laporanjurnalpkl", $data);
    }

    public function cetak_jurnal_pkl()
    {
        $this->load->library('fpdf');
        $data['jurnal_pkl'] = $this->jurnalpkl_model->getAll();
        if (!$data["jurnal_pkl"]) show_error('Tidak ditemukan data', '404', 'Tidak dapat mencetak laporan jurnal PKL');
        $this->load->view('siswa/laporanpkl/cetakjurnalpkl', $data);
    }
}
