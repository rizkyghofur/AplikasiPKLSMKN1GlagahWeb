<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model admin
        $this->load->model('admin');
    }

    public function index()
    {
        if ($this->session->userdata("role") == "admin_pkl") {
            redirect('admin/dashboard/');
        }
        if ($this->session->userdata("role") == "pembimbing_dudi") {
            redirect('pembimbingdudi/dashboard');
        }
        if ($this->session->userdata("role") == "siswa") {
            redirect('siswa/dashboard/');
        } else {

            //jika session belum terdaftar

            //set form validation
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            //set message form validation
            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

            //cek validasi
            if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = $this->input->post('password', TRUE);

                //checking data via model
                $checking = $this->admin->check_login('pengguna', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {
                        $session_data = array(
                            'id'   => $apps->id,
                            'username' => $apps->username,
                            'password' => $apps->password,
                            'nama' => $apps->nama,
                            'role' => $apps->role
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if ($this->session->userdata("role") === "admin_pkl") {
                            redirect('admin/dashboard/');
                        } elseif ($this->session->userdata("role") === "pembimbing_dudi") {
                            redirect('pembimbingdudi/dashboard/');
                        } else {
                            redirect('siswa/dashboard/');
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
