<?php

class Materi extends CI_Controller
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
		$this->load->view('materi/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = ' TAMBAH MATERI';

		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('indikator', 'indikator', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('materi/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Materi_model->tambahMateri();
			$this->session->set_flashdata('message', '<div style="background-color:#e4ffb8; width:300px; text-align: center; margin:5px auto;">Materi berhasil ditambahkan.</div>');
			redirect('materi');
		}
	}

	public function hapus($id)
	{
		$this->Materi_model->hapusMateri($id);
		$this->session->set_flashdata('message', '<div style="background-color:#e4ffb8; width:300px; text-align: center; margin:5px auto;">Materi berhasil dihapus.</div>');
		redirect('materi');
	}

	public function edit($id)
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = ' EDIT MATERI';

		$data['materi'] = $this->Materi_model->getMateriById($id);

		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('indikator', 'indikator', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('materi/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Materi_model->editMateri($id);
			$this->session->set_flashdata('message', '<div style="background-color:#e4ffb8; width:300px; text-align: center; margin:5px auto;">Materi berhasil diedit.</div>');
			redirect('materi');
		}
	}
}
