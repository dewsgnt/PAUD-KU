<?php

class Tugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tugas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['tugas'] = $this->Tugas_model->getTugas();

        $data['judul'] = ' TUGAS';
        $this->load->view('templates/header', $data);
        $this->load->view('tugas/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = ' TAMBAH TUGAS';

        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('tugas/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tugas_model->tambahTugas();
            $this->session->set_flashdata('message', '<div style="background-color:#e4ffb8; width:300px; text-align: center; margin:5px auto;">Tugas berhasil ditambahkan.</div>');
            redirect('tugas');
        }
    }

    public function hapus($id)
    {
        $this->Tugas_model->hapusTugas($id);
        $this->session->set_flashdata('message', '<div style="background-color:#e4ffb8; width:300px; text-align: center; margin:5px auto;">Tugas berhasil dihapus.</div>');
        redirect('tugas');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = ' EDIT TUGAS';

        $data['tugas'] = $this->Tugas_model->getTugasById($id);

        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('tugas/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tugas_model->editTugas($id);
            $this->session->set_flashdata('message', '<div style="background-color:#e4ffb8; width:300px; text-align: center; margin:5px auto;">Tugas berhasil diedit.</div>');
            redirect('tugas');
        }
    }

    public function hasil()
    {
        // $data['hasil'] = $this->Tugas_model->getHasil();

        $data['judul'] = ' HASIL TUGAS';

        $this->load->view('templates/header', $data);
        $this->load->view('tugas/hasil', $data);
        $this->load->view('templates/footer');
    }
}
