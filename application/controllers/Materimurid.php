<?php

class Materimurid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Materi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['materi'] = $this->Materi_model->getMateri();

        $data['judul'] = ' MATERI';
        $this->load->view('templates/header', $data);
        $this->load->view('materimurid/index', $data);
        $this->load->view('templates/footer');
    }
}
