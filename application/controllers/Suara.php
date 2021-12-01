<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suara extends CI_Controller
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
            'judul' => 'Hasil Suara',
            'hslsuara' =>  $this->M_Chart->grafik($id),
            
        ];
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_suara', $data['hslsuara']);
        $this->load->view('Data/v_grafik');
        $this->load->view('layout/footer');
    }
   
}
