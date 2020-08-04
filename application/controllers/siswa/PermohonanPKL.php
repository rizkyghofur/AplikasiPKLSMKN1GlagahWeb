<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PermohonanPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permohonanpkl_model');
        $this->load->model('datadudi_model');
        $this->load->model('admin');
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Permohonan Pelaksanaan PKL';
        $data['permohonanpkl'] = $this->permohonanpkl_model->getAll();
        $data['pengajuanpkl'] = $this->permohonanpkl_model->getHistory();
        $data['data_dudi'] = $this->datadudi_model->getDataDUDI();
        $this->load->view("siswa/permohonanpkl/permohonanpkl", $data);
    }

    public function tambahpermohonanpkl()
    {
        $permohonanpkl = $this->permohonanpkl_model;
        $validation = $this->form_validation;
        $validation->set_rules($permohonanpkl->rules());

        if ($validation->run()) {
            $permohonanpkl->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('siswa/PermohonanPKL');
        } else {
            $this->session->set_flashdata('danger', 'Gagal tersimpan, cek kembali masukan yang Anda berikan');
            redirect('siswa/PermohonanPKL');
        }
    }

    public function hapuspermohonanpkl($id_pengajuanpkl = null)
    {
        if (!isset($id_pengajuanpkl)) show_404();
        if ($this->permohonanpkl_model->delete($id_pengajuanpkl)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect('siswa/PermohonanPKL');
        }
    }
}
