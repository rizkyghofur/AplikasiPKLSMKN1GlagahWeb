<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DataDUDI extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("datadudi_model");
        $this->load->model("pengajuanpkl_model");
        $this->load->library('form_validation');
        $this->load->model('admin');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['title'] = 'Data DUDI';
        $data['notif_belumtervalidasi'] = $this->pengajuanpkl_model->getNotifBelumTervalidasi();
        $data['belum_tervalidasi'] = $this->pengajuanpkl_model->getBelumTervalidasi();
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
            redirect('admin/DataDUDI');
        }
        $data['title'] = 'Tambah Data DUDI';
        $this->load->view("admin/datadudi/daftardudi", $data);
    }

    public function editdatadudi($id = null)
    {

        if (!isset($id)) redirect('admin/DataDUDI');
        $datadudi = $this->datadudi_model;
        $validation = $this->form_validation;
        $validation->set_rules($datadudi->rules());

        if ($validation->run()) {
            $datadudi->update();
            $this->session->set_flashdata('success', 'Berhasil diubah');
            redirect('admin/DataDUDI');
        }
        $data['title'] = 'Ubah Data DUDI';
        $data["datadudi"] = $datadudi->getById($id);
        $data['notif_belumtervalidasi'] = $this->pengajuanpkl_model->getNotifBelumTervalidasi();
        $data['belum_tervalidasi'] = $this->pengajuanpkl_model->getBelumTervalidasi();
        if (!$data["datadudi"]) show_404();
        $this->load->view("admin/datadudi/editdatadudi", $data);
    }

    public function hapusdatadudi($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->datadudi_model->delete($id)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect('admin/DataDUDI');
        }
    }
}
