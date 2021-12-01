<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tb_login');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function save($post)
    {
        $data = [
            'nama' => $post['nama'],
            'username' => $post['username'],
            'password' =>sha1($post['password']),
            'nis' => $post['nis'],
            'kelas' => $post['kelas'],
            'foto' => $post['foto'],
            'is_active' => $post['is_active'],
        ];
        $this->db->insert('tb_login', $data);
    }
    public function get_data_byid($id)
    {
        return $this->db->get_where('tb_login', ['id' => $id]);
    }
    public function get_data($id = null)
    {
        $this->db->from('tb_login');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
   
}
