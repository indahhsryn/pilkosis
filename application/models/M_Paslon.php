<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Paslon extends CI_Model
{
    public function tampil_data()
    {
        return  $this->db->get('tb_calon');
    }

    public function deleted($no)
    {
        $this->db->where('no', $no);
        $this->db->delete('tb_calon');
    }
    public function get_data_byid($id)
    {
        return $this->db->get_where('tb_calon', ['no' => $id]);
    }
}
