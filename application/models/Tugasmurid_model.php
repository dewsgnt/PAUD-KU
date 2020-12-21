<?php

class Tugasmurid_model extends CI_model
{
    public function getTugas()
    {
        return $this->db->get('tugas')->result_array();
    }
    public function getHasilTugas()
    {
        return $this->db->get('hasil')->result_array();
    }

    public function kumpulTugas()
    {
        $data = [
            "gambar" => $this->input->post('gambar', true)

        ];

        $this->db->insert('hasil', $data);
    }
}
