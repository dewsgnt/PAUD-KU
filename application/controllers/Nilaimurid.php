<?php

class Nilaimurid extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = ' NILAI';
        $this->load->view('templates/header', $data);
        $this->load->view('nilaimurid/index', $data);
        $this->load->view('templates/footer');
    }
}
