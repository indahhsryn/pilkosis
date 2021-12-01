<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Chart');
        tidak_login();
        check_admin();
    }
    public function index()
    {
        $id = $this->session->userdata('id');
        $data = [
            'judul' => 'Laporan',
            'hsl' => $this->M_Chart->grafik($id),
            'pilih' => $this->db->get("tb_pemilih")->num_rows()
        ];
        // var_dump($data['hsl']); die;
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_laporan');
        $this->load->view('layout/footer');
    }
    public function cetak()
    {
        $data = [
            'judul' => 'Laporan',
            'hsl' => $this->M_Chart->grafik(),
            'pilih' => $this->db->get("tb_pemilih")->num_rows()
        ];
        $this->load->view('Data/v_cetak', $data);
    }
}

