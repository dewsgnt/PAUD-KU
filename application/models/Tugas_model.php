<?php

class Tugas_model extends CI_model
{
    public function getTugas()
    {
        return $this->db->get('tugas')->result_array();
    }

    public function tambahTugas(){
    	$data = [
    		"tanggal"=> $this->input->post('tanggal'),
    		"judul"=> $this->input->post('judul',true),
            "deskripsi"=>$this->input->post('deskripsi',true)

    	];

    	$this->db->insert('tugas', $data);
    }

    public function hapusTugas($id){
    	$this->db->where('id', $id);
    	$this->db->delete('tugas');
    }
    
    public function getTugasById($id){
        return $this->db->get_where('tugas',['id'=>$id])->row_array();
    }

    public function editTugas($id){
        $data = [
            "tanggal"=> $this->input->post('tanggal'),
            "judul"=> $this->input->post('judul',true),
            "deskripsi"=>$this->input->post('deskripsi',true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tugas', $data);
    }

    // public function getHasil(){
    //     return $this->db->get('hasil')->result_array();
    // }



}
