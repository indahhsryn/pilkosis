<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pilkosis extends CI_Model
{
    
    public function setting($post){
        $data=[
            'tanggal_mulai' => $post['tglmulai'],
            'tanggal_akhir' => $post['tgltutup'],
        ];
        $this->db->insert('tb_pilkosis', $data);
    }
    public function get($id = null)
    {
        $this->db->from('tb_pilkosis');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('tb_pilkosis');
    }
   
}
