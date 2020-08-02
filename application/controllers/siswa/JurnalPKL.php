<?php

defined('BASEPATH') or exit('No direct script access allowed');

class JurnalPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin');
        $this->load->model("jurnalpkl_model");
        $this->load->model("permohonanpkl_model");
        $this->load->library("form_validation");
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Jurnal PKL';
        $data['pengajuanpkl'] = $this->permohonanpkl_model->getAll();
        $data['jurnal_pkl'] = $this->jurnalpkl_model->getAll();
        $this->load->view("siswa/jurnalpkl/listjurnalpkl", $data);
    }

    public function tambahjurnalpkl()
    {
        $jurnalpkl = $this->jurnalpkl_model;
        $validation = $this->form_validation;
        $validation->set_rules($jurnalpkl->rules());

        if ($validation->run()) {
            $jurnalpkl->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('siswa/JurnalPKL');
        }
        $data['title'] = 'Tambah Data Jurnal PKL';
        $data['mapel'] = $this->jurnalpkl_model->getMapel();
        $this->load->view("siswa/jurnalpkl/tambahjurnalpkl", $data);
    }

    public function getKompetensidasar()
    {
        $id = $this->input->post('id', true);
        $data = $this->jurnalpkl_model->getKompetensidasar($id);
        echo json_encode($data);
    }

    public function editjurnalpkl($id = null)
    {
        if (!isset($id)) redirect('siswa/JurnalPKL');
        $jurnalpkl = $this->jurnalpkl_model;
        $validation = $this->form_validation;
        $validation->set_rules($jurnalpkl->rules());

        if ($validation->run()) {
            $jurnalpkl->update();
            $this->session->set_flashdata('success', 'Berhasil diubah');
            redirect('siswa/JurnalPKL');
        }
        $data['title'] = 'Ubah Data Jurnal PKL';
        $data['mapel'] = $this->jurnalpkl_model->getMapel();
        $data["jurnalpkl"] = $jurnalpkl->getById($id);
        if (!$data["jurnalpkl"]) show_404();
        $this->load->view("siswa/jurnalpkl/ubahjurnalpkl", $data);
    }

    public function hapusjurnalpkl($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->jurnalpkl_model->delete($id)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect('siswa/jurnalpkl');
        }
    }

    public function cetak_jurnal_pkl()
    {
        $this->load->library('fpdf');
        $data['jurnal_pkl'] = $this->jurnalpkl_model->getAll();
        if (!$data["jurnal_pkl"]) show_error('Tidak ditemukan data', '404', 'Tidak dapat mencetak laporan jurnal PKL');
        $this->load->view('siswa/jurnalpkl/cetakjurnalpkl', $data);
    }
}
