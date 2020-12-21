<?php

class Tugasmurid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tugasmurid_model');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['tugas'] = $this->Tugasmurid_model->getTugas();

        $data['judul'] = ' TUGAS';
        $this->load->view('templates/header', $data);
        $this->load->view('tugasmurid/index', $data);
        $this->load->view('templates/footer');
    }

    public function kumpulkan()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $data['tugas'] = $this->db->get_where('tugas', ['id' => $this->session->userdata('id')])->row_array();

        $data['judul'] = ' TUGAS';

        $this->form_validation->set_rules('gambar', 'gambar', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('tugasmurid', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tugasmurid_model->kumpulTugas();
            $this->session->set_flashdata('message', '<div style="background-color:#e4ffb8; width:300px; text-align: center; margin:5px auto;">Tugas berhasil dikumpulkan.</div>');
            redirect('tugasmurid');
        }
    }
}
