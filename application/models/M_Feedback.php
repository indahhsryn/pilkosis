<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Feedback extends CI_Model{
    public function simpan($post){
        $data=[
            'nama' => $post['nama'],
            'kelas' => $post['kelas'],
            'feedback' => $post['feedback'],
            'saran' => $post['saran']
        ];
        $this->db->insert('tb_feedback', $data);
    }
    public function get($id = null)
    {
        $this->db->from('tb_feedback');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}