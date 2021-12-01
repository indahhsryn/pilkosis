<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Chat extends CI_Model
{
    public function simpan($post)
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d H:i:s');
        $data = [
            'nama' => $post['name'],
            'message' => $post['message'],
            'waktu' => $tgl
        ];
        $this->db->insert('tb_chat', $data);
    }
    public function get_data($id = null)
    {
        $this->db->from('tb_chat');
        if ($id != null) {
            $this->db->where('id_pesan', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function save($post)
    {
        $data = [
            'nama' => $post['nama'],
            'kelas' => $post['kelas'],
            'no_hp' => $post['no_hp'],
            'pertanyaan' => $post['pertanyaan'],
        ];
        $this->db->insert('tb_pertanyaan', $data);
    }
    public function vote_result()
    {
        $this->db->join('tb_pemilih', 'tb_pemilih.no_kandidat = tb_calon.nama_paslon');
    }
    
}
