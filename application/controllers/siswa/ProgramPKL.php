<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProgramPKL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin');
        $this->load->model("programpkl_model");
        $this->load->library("form_validation");
        if ($this->admin->is_role() != "siswa") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['program_pkl'] = $this->programpkl_model->getAll();
        $this->load->view("siswa/programpkl/listprogrampkl", $data);
    }

    public function tambahprogrampkl()
    {
        $programpkl = $this->programpkl_model;
        $validation = $this->form_validation;
        $validation->set_rules($programpkl->rules());

        if ($validation->run()) {
            $programpkl->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('siswa/ProgramPKL');
        }
        $data['title'] = 'Tambah Data Program PKL';
        $data['mapel'] = $this->programpkl_model->getMapel();
        $this->load->view("siswa/programpkl/tambahprogrampkl", $data);
    }

    public function getKompetensidasar()
    {
        $id = $this->input->post('id', true);
        $data = $this->programpkl_model->getKompetensidasar($id);
        echo json_encode($data);
    }

    public function editprogrampkl($id_program_pkl = null)
    {
        if (!isset($id_program_pkl)) redirect('siswa/ProgramPKL');
        $programpkl = $this->programpkl_model;
        $validation = $this->form_validation;
        $validation->set_rules($programpkl->rules());

        if ($validation->run()) {
            $programpkl->update();
            $this->session->set_flashdata('success', 'Berhasil diubah');
            redirect('siswa/ProgramPKL');
        }
        $data['title'] = 'Ubah Data Jurnal PKL';
        $data['mapel'] = $this->programpkl_model->getMapel();
        $data["programpkl"] = $programpkl->getById($id_program_pkl);
        if (!$data["programpkl"]) show_404();
        $this->load->view("siswa/programpkl/ubahprogrampkl", $data);
    }

    public function hapusprogrampkl($id_program_pkl = null)
    {
        if (!isset($id_program_pkl)) show_404();
        if ($this->programpkl_model->delete($id_program_pkl)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect('siswa/ProgramPKL');
        }
    }

    public function cetak_program_pkl()
    {
        $this->load->library('fpdf');
        $data['program_pkl'] = $this->programpkl_model->getAll();
        if (!$data["program_pkl"]) show_error('Tidak ditemukan data', '404', 'Tidak dapat mencetak laporan program PKL');
        $this->load->view('siswa/laporanpkl/cetakprogrampkl', $data);
    }
}