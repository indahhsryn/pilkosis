<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        tidak_login();
    }
    public function index()
    {
        $data = [
            'judul' => 'Konsultasi',
            'chat' => $this->db->order_by('id', 'ASC')->get('tb_chat')->result()

        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Konsultasi/index');
        $this->load->view('layout/footer');
    }
}
