<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'nama pengguna', 'trim|required');
        $this->form_validation->set_rules('password', 'kata sandi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'MASUK';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();


        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if ($password == $user['password']) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('message', '<div style="background-color:#ffb8b8; text-align: center; "> Kata sandi salah! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div style="background-color:#ffb8b8; text-align: center; ">Nama pengguna ini belum diaktifkan</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div style="background-color:#ffb8b8; text-align: center; ">Nama pengguna ini tidak terdaftar</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div style="background-color:#e4ffb8; text-align: center; margin-top:5px;">Anda telah keluar.</div>');
        redirect('auth');
    }
}
