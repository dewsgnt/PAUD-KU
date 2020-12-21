<?php

class Materi_model extends CI_model
{
    public function getMateri()
    {
        return $this->db->get('materi')->result_array();
    }

    public function tambahMateri(){
    	$data = [
    		"tanggal"=> $this->input->post('tanggal'),
    		"indikator"=> $this->input->post('indikator',true)
    	];

    	$this->db->insert('materi', $data);
    }

    public function hapusMateri($id){
    	$this->db->where('id', $id);
    	$this->db->delete('materi');
    }

    public function getMateriById($id){
        return $this->db->get_where('materi',['id'=>$id])->row_array();
    }

    public function editMateri($id){
        $data = [
            "tanggal"=> $this->input->post('tanggal'),
            "indikator"=> $this->input->post('indikator',true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('materi', $data);
    }
}
