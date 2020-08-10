<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin');
        $this->load->model('pengajuanpkl_model');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['total_pengajuan'] = $this->pengajuanpkl_model->getTotalPengajuan();
        $data['total_siswa'] = $this->pengajuanpkl_model->getTotalSiswa();
        $data['siswa_belum_mengajukan'] = $this->pengajuanpkl_model->getTotalSiswaBelumMengajukan();
        $data['siswa_sudah_mengajukan'] = $this->pengajuanpkl_model->getTotalSiswaSudahMengajukan();
        $data['belum_tervalidasi'] = $this->pengajuanpkl_model->getBelumTervalidasi();
        $data['proses_pengajuan'] = $this->pengajuanpkl_model->getProsesPengajuan();
        $data['diterima'] = $this->pengajuanpkl_model->getDiterima();
        $data['ditolak'] = $this->pengajuanpkl_model->getDitolak();
        $this->load->view("admin/beranda", $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
