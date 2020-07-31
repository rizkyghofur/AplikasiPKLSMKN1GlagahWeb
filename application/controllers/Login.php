<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin');
    }

    public function index()
    {
        if ($this->session->userdata("role") == "admin_pkl") {
            redirect('admin/beranda/');
        }
        if ($this->session->userdata("role") == "pembimbing_dudi") {
            redirect('pembimbingdudi/beranda');
        }
        if ($this->session->userdata("role") == "siswa") {
            redirect('siswa/beranda/');
        } else {

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

            if ($this->form_validation->run() == TRUE) {

                $username = $this->input->post("username", TRUE);
                $password = $this->input->post('password', TRUE);
                $checking = $this->admin->check_login('pengguna', array('username' => $username), array('password' => $password));
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {
                        $session_data = array(
                            'id'   => $apps->id,
                            'id_siswa'   => $apps->id_siswa,
                            'username' => $apps->username,
                            'nama_siswa' => $apps->nama_siswa,
                            'nama_staf_tu' => $apps->nama_staf_tu,
                            'nama_dudi' => $apps->nama_dudi,
                            'password' => $apps->password,
                            'role' => $apps->role
                        );
                        $this->session->set_userdata($session_data);
                        if ($this->session->userdata("role") === "admin_pkl") {
                            redirect('admin/beranda/');
                        } elseif ($this->session->userdata("role") === "pembimbing_dudi") {
                            redirect('pembimbingdudi/beranda/');
                        } else {
                            redirect('siswa/beranda/');
                        }
                    }
                } else {
                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> Peringatan</b> nama pengguna atau kata sandi salah!</div></div>';
                    $this->load->view('login', $data);
                }
            } else {
                $this->load->view('login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
