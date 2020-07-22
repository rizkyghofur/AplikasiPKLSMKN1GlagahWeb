<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("akun_model");
        $this->load->library('form_validation');
        $this->load->model('admin');
        if ($this->admin->is_role() != "admin_pkl") {
            redirect("login/");
        }
    }

    public function index()
    {
        $config['base_url'] = base_url('admin/akun'); //site url
        $config['total_rows'] = $this->db->count_all('pengguna'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $config['first_link']       = 'Pertama';
        $config['last_link']        = 'Terakhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pengguna'] = $this->akun_model->getAll($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view("admin/akun/listakun", $data);
    }

    public function editakun($id = null)
    {
        if (!isset($id)) redirect('admin/akun');
        $akun = $this->akun_model;
        $validation = $this->form_validation;
        $validation->set_rules($akun->rules());

        if ($validation->run()) {
            $akun->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["akun"] = $akun->getById($id);
        if (!$data["akun"]) show_404();
        $this->load->view("admin/akun/editakun", $data);
    }

    public function hapusakun($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->akun_model->delete($id)) {
            redirect(base_url('admin/akun'));
        }
    }
}
