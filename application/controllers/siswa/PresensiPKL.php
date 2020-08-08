<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PresensiPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("absensipkl_model");
        $this->load->model("permohonanpkl_model");
        $this->load->model('admin');
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Presensi PKL';
        $data['absensi'] = $this->absensipkl_model->getAll();
        $data['pengajuanpkl'] = $this->permohonanpkl_model->getAll();
        $data['data_siswa'] = $this->absensipkl_model->getDataSiswa();
        $this->load->view("siswa/absensipkl/listabsensipkl", $data);
    }

    public function tambahabsensipkl()
    {
        $absensipkl = $this->absensipkl_model;
        $validation = $this->form_validation;
        $validation->set_rules($absensipkl->rules());

        if ($validation->run()) {
            $absensipkl->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('siswa/AbsensiPKL');
        } else {
            $this->session->set_flashdata('danger', 'Gagal tersimpan, cek kembali masukan yang Anda berikan');
            redirect('siswa/AbsensiPKL');
        }
    }

    public function hapusabsensipkl($id_absensi = null)
    {
        if (!isset($id_absensi)) show_404();
        if ($this->absensipkl_model->delete($id_absensi)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect('siswa/AbsensiPKL');
        }
    }
}
