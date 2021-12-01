<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_info extends CI_Model
{
    public function save_alamat($post)
    {
     $data= [
        'alamat' => $post['alamat'],
        'kode_pos' => $post['kdPos'],
        'telepon' => $post['telepon'],
     ]; 
     $this->db->insert('tb_alamat', $data);
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('tb_alamat');
    }
    public function get_data_by_id($id){
        return $this->db->get_where('tb_alamat', ['id' => $id]);
    }
}
