<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Login extends CI_Model
{
    public function login($post)
    {
        //mengambil data dari database
        $this->db->select('*');
        $this->db->from('tb_login');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function get_nama($id = null)
    {
        $this->db->from('tb_login');
        if ($id != null) {
            $this->db->where('username', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function get($id = null)
    {
        $this->db->from('tb_calon');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function get_data($id= null){
        $this->db->from('tb_pemilih');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function save($post)
    {
        $data = [
            'no' => $post['no'],
            'nama_paslon' => $post['nama'],
            'calon_ketua' => $post['ketua'],
            'calon_wakil' => $post['wakil'],
            'visi' => $post['visi'],
            'misi' => $post['misi'],
            'proker' => $post['proker'],
            'foto' => $post['foto'],
        ];
        $this->db->insert('tb_calon', $data);
    }
    public function deleted($id)
    {
        $this->db->where('no', $id);
        $this->db->delete('tb_calon');
    }
    public function get_data_byid($id)
    {
        return $this->db->get_where('tb_calon', ['id' => $id]);
    }
    public function update($data, $table)
    {
        $this->db->update($table, $data);
    }
    public function updatePassword($pwd, $id){
        $this->db->where("tb_login", $id);
        $this->db->update("tb_login", array("password"=>$pwd));
        if($this->db->affected_rows() > 0){
            
        }
    }
    public function cek_votting($post = null)
    {
        if($post != null){
            $this->db->where('username',$post);
        }
        return $this->db->get('tb_pemilih');
        
    }
    public function get_data_byid_informasi($id)
    {
        return $this->db->get_where('tb_kegiatan', ['id' => $id]);
    }
  
}
