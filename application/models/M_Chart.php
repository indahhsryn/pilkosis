<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Chart extends CI_Model
{
    public function grafik()
    {
        $this->db->select('
        paslon.no AS no,
        paslon.nama_paslon AS nama,
        COUNT(suara.no_kandidat) AS jml_suara');
        $this->db->from('tb_calon AS paslon');
        $this->db->join('tb_pemilih AS suara', 'paslon.no = suara.no_kandidat', 'left');
        $this->db->group_by('paslon.no');
        $query = $this->db->get();
        return $query->result();
    }
}
